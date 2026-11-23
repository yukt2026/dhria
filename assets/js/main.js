document.addEventListener('DOMContentLoaded', () => {
    // 1. Sticky Header Shadow
    const header = document.getElementById('siteHeader');
    if (header) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 20) {
                header.classList.add('shadow-sm');
            } else {
                header.classList.remove('shadow-sm');
            }
        });
    }

    // Direct navigation for dropdown trigger on desktop
    const productsNavDropdown = document.getElementById('productsNavDropdown');
    if (productsNavDropdown) {
        productsNavDropdown.addEventListener('click', (e) => {
            if (window.innerWidth >= 992) {
                window.location.href = productsNavDropdown.getAttribute('href');
            }
        });
    }

    // 2. Product Category Filter Tabs with dynamic banner title
    const filterButtons = document.querySelectorAll('.filter-btn');
    const productItems = document.querySelectorAll('.product-item');
    const pageBannerTitle = document.getElementById('pageBannerTitle');

    if (filterButtons.length > 0 && productItems.length > 0) {
        filterButtons.forEach(btn => {
            btn.addEventListener('click', () => {
                filterButtons.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');

                const filter = btn.dataset.filter;
                if (pageBannerTitle) {
                    if (filter === 'vegetable-oils') {
                        pageBannerTitle.textContent = 'Our vegetable oils';
                    } else if (filter === 'essential-oils') {
                        pageBannerTitle.textContent = 'Our essential oils';
                    } else {
                        pageBannerTitle.textContent = 'Our essential oils & vegetable oils';
                    }
                }

                productItems.forEach(item => {
                    if (filter === 'all') {
                        item.classList.remove('d-none');
                    } else if (filter === 'essential-oils') {
                        if (item.dataset.category.includes('essential')) {
                            item.classList.remove('d-none');
                        } else {
                            item.classList.add('d-none');
                        }
                    } else if (filter === 'vegetable-oils') {
                        if (item.dataset.category.includes('vegetable')) {
                            item.classList.remove('d-none');
                        } else {
                            item.classList.add('d-none');
                        }
                    }
                });
            });
        });
    }

    // 3. Technical Product Detail Modal Trigger (Matches User Reference Images 1 & 2)
    const productModalEl = document.getElementById('productDetailModal');
    const productCards = document.querySelectorAll('.product-card-trigger');

    if (productModalEl && productCards.length > 0) {
        const bsProductModal = new bootstrap.Modal(productModalEl);

        const mTitle = document.getElementById('mProductTitle');
        const mBotanical = document.getElementById('mBotanicalName');
        const mInci = document.getElementById('mInciName');
        const mAromatic = document.getElementById('mAromaticDesc');
        const mUsedPart = document.getElementById('mUsedPart');
        const mCollection = document.getElementById('mCollection');
        const mProcess = document.getElementById('mProcess');
        const mUtilisation = document.getElementById('mUtilisation');
        const mUsesList = document.getElementById('mUsesList');
        const mPlantImg = document.getElementById('mPlantImg');
        const mInquiryBtn = document.getElementById('mInquiryBtn');
        const monthSpans = document.querySelectorAll('#mHarvestCalendar .harvest-month');

        const monthMap = {
            'JAN': 1, 'FEB': 2, 'MAR': 3, 'APR': 4, 'MAY': 5, 'JUN': 6,
            'JUL': 7, 'AUG': 8, 'SEP': 9, 'OCT': 10, 'NOV': 11, 'DEC': 12
        };

        productCards.forEach(card => {
            card.addEventListener('click', (e) => {
                // Ignore if clicked on a direct link
                if (e.target.tagName === 'A' && !e.target.classList.contains('spec-quote-btn')) {
                    return;
                }

                try {
                    const data = JSON.parse(card.getAttribute('data-product'));
                    if (!data) return;

                    if (mTitle) mTitle.textContent = data.modal_title || data.title.toUpperCase() + ' ESSENTIAL OIL';
                    if (mBotanical) mBotanical.textContent = data.botanical_name || '';
                    if (mInci) mInci.textContent = data.inci_name || (data.title.toUpperCase() + ' OIL');
                    if (mAromatic) mAromatic.textContent = data.aromatic_desc || data.summary || 'Pure botanical essence';
                    if (mUsedPart) mUsedPart.textContent = data.used_part || 'Leaves / Flowers';
                    if (mCollection) mCollection.textContent = data.collection || 'Culture';
                    if (mProcess) mProcess.textContent = data.process || 'Steam distillation';
                    if (mUtilisation) mUtilisation.textContent = data.utilisation || 'Fragrance, Cosmetic, Aromatherapy';
                    if (mPlantImg) mPlantImg.src = data.image || '';

                    if (mInquiryBtn) {
                        mInquiryBtn.href = 'contact.php?subject=' + encodeURIComponent('Inquiry for ' + data.title);
                    }

                    // Populate Uses & Functions List
                    if (mUsesList) {
                        mUsesList.innerHTML = '';
                        const uses = data.uses_functions || [
                            'Antiseptic and purifying properties',
                            'Soothing cosmetic ingredient',
                            'Fine fragrance component'
                        ];
                        uses.forEach(u => {
                            const li = document.createElement('li');
                            li.textContent = u;
                            mUsesList.appendChild(li);
                        });
                    }

                    // Update Harvest Time Calendar Strip
                    if (monthSpans.length === 12) {
                        monthSpans.forEach(m => m.classList.remove('active'));
                        const activeList = data.active_months || [];
                        const isAllYear = activeList.includes('ALL YEAR');

                        monthSpans.forEach((m, idx) => {
                            const mNum = idx + 1;
                            let isActive = isAllYear;
                            if (!isActive) {
                                for (let key in monthMap) {
                                    if (activeList.includes(key) && monthMap[key] === mNum) {
                                        isActive = true;
                                        break;
                                    }
                                }
                            }
                            if (isActive) {
                                m.classList.add('active');
                            }
                        });
                    }

                    bsProductModal.show();
                } catch (err) {
                    console.error('Error opening product modal:', err);
                }
            });
        });

        // Open modal directly if URL contains a product hash (e.g. #ylang-ylang)
        if (window.location.hash) {
            const targetId = window.location.hash.substring(1);
            const targetItem = document.getElementById(targetId);
            if (targetItem) {
                const trigger = targetItem.querySelector('.product-card-trigger');
                if (trigger) {
                    setTimeout(() => trigger.click(), 200);
                }
            }
        }
    }

    // 4. Image Gallery Lightbox Modal for Activities & News
    const galleryModal = document.getElementById('galleryModal');
    if (galleryModal) {
        const modalImg = document.getElementById('galleryModalImage');
        const modalCaption = document.getElementById('galleryModalCaption');

        galleryModal.addEventListener('show.bs.modal', (event) => {
            const trigger = event.relatedTarget;
            if (trigger) {
                const imgSrc = trigger.getAttribute('data-img');
                const caption = trigger.getAttribute('data-caption') || '';
                if (modalImg && imgSrc) {
                    modalImg.src = imgSrc;
                }
                if (modalCaption) {
                    modalCaption.textContent = caption;
                    modalCaption.style.display = caption ? 'inline-block' : 'none';
                }
            }
        });
    }

    // 5. AJAX Contact Form Handler
    const contactForm = document.getElementById('floramadContactForm');
    const contactAlert = document.getElementById('contactAlert');
    const submitBtn = document.getElementById('submitBtn');

    if (contactForm) {
        contactForm.addEventListener('submit', async (e) => {
            e.preventDefault();
            if (submitBtn) {
                submitBtn.disabled = true;
                submitBtn.textContent = 'Sending...';
            }
            if (contactAlert) {
                contactAlert.className = 'alert d-none mb-4';
            }

            try {
                const response = await fetch(contactForm.action, {
                    method: 'POST',
                    body: new FormData(contactForm)
                });
                const result = await response.json();

                if (contactAlert) {
                    contactAlert.classList.remove('d-none');
                    if (result.status === 'success') {
                        contactAlert.className = 'alert alert-success mb-4';
                        contactAlert.innerHTML = '<i class="bi bi-check-circle-fill me-2"></i>' + result.message;
                        contactForm.reset();
                    } else {
                        contactAlert.className = 'alert alert-danger mb-4';
                        contactAlert.innerHTML = '<i class="bi bi-exclamation-triangle-fill me-2"></i>' + (result.message || 'Error sending message.');
                    }
                }
            } catch (err) {
                if (contactAlert) {
                    contactAlert.classList.remove('d-none');
                    contactAlert.className = 'alert alert-danger mb-4';
                    contactAlert.innerHTML = '<i class="bi bi-exclamation-triangle-fill me-2"></i>Unable to send your inquiry at this moment. Please email us directly.';
                }
            } finally {
                if (submitBtn) {
                    submitBtn.disabled = false;
                    submitBtn.textContent = 'Send';
                }
            }
        });
    }
});

// 6. Global Quick Order Modal Handlers for Ayurveda Products
function openQuickOrder(id, name, price, img) {
    const modalEl = document.getElementById('quickOrderModal');
    if (!modalEl) return;

    const modal = bootstrap.Modal.getOrCreateInstance(modalEl);
    
    const idInput = document.getElementById('orderProductId');
    const nameEl = document.getElementById('orderProductName');
    const priceEl = document.getElementById('orderProductPrice');
    const imgEl = document.getElementById('orderProductImg');
    const successMsg = document.getElementById('orderSuccessMsg');
    
    if (idInput) idInput.value = id;
    if (nameEl) nameEl.textContent = name;
    if (priceEl) priceEl.textContent = '₹' + Number(price).toLocaleString('en-IN');
    if (imgEl && img) imgEl.src = img;
    if (successMsg) successMsg.classList.add('d-none');

    modal.show();
}

function sendOrderViaWhatsApp() {
    const name = document.getElementById('orderCustName')?.value.trim() || 'Valued Customer';
    const phone = document.getElementById('orderCustPhone')?.value.trim() || '';
    const address = document.getElementById('orderCustAddress')?.value.trim() || 'Address not provided yet';
    const prodName = document.getElementById('orderProductName')?.textContent.trim() || 'Dhuria Ayurvedic Product';
    const prodPrice = document.getElementById('orderProductPrice')?.textContent.trim() || '';
    const payment = document.querySelector('input[name="orderPayment"]:checked')?.value || 'Cash on Delivery (COD)';

    if (!phone) {
        alert('Please enter your 10-digit mobile number so we can process your order.');
        document.getElementById('orderCustPhone')?.focus();
        return;
    }

    const message = `*NEW AYURVEDIC ORDER REQUEST*\n` +
                    `--------------------------------\n` +
                    `*Product:* ${prodName}\n` +
                    `*Price:* ${prodPrice}\n` +
                    `*Patient Name:* ${name}\n` +
                    `*Phone:* ${phone}\n` +
                    `*Delivery Address:* ${address}\n` +
                    `*Payment Method:* ${payment}\n` +
                    `--------------------------------\n` +
                    `Please confirm order dispatch and delivery timeline.`;

    const waUrl = `https://wa.me/919318445297?text=${encodeURIComponent(message)}`;
    window.open(waUrl, '_blank');
}

function submitQuickOrder() {
    const name = document.getElementById('orderCustName')?.value.trim();
    const phone = document.getElementById('orderCustPhone')?.value.trim();
    const address = document.getElementById('orderCustAddress')?.value.trim();
    const successMsg = document.getElementById('orderSuccessMsg');

    if (!name || !phone || !address) {
        alert('Please fill all required fields (Name, Phone, Address).');
        return;
    }

    if (successMsg) {
        successMsg.classList.remove('d-none');
    }
}

