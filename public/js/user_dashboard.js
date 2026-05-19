  
        function switchTab(tabName) {
            document.querySelectorAll('.tab-content').forEach(content => {
                content.classList.remove('active');
            });
            
            document.querySelectorAll('.tab-btn').forEach(btn => {
                btn.classList.remove('bg-gradient-to-r', 'from-blue-600', 'to-purple-600', 'text-white', 'shadow-lg');
                btn.classList.add('text-gray-600', 'hover:bg-blue-50', 'hover:text-blue-600');
                
                const icon = btn.querySelector('i');
                if (icon) {
                    icon.classList.remove('text-white');
                    icon.classList.add('text-gray-600');
                }
            });
            
            document.getElementById(tabName).classList.add('active');
            
            const activeBtn = document.querySelector(`[data-tab="${tabName}"]`);
            if (activeBtn) {
                activeBtn.classList.remove('text-gray-600', 'hover:bg-blue-50', 'hover:text-blue-600');
                activeBtn.classList.add('bg-gradient-to-r', 'from-blue-600', 'to-purple-600', 'text-white', 'shadow-lg');
                
                const icon = activeBtn.querySelector('i');
                if (icon) {
                    icon.classList.remove('text-gray-600');
                    icon.classList.add('text-white');
                }
            }
            
            showToast(`Switched to ${tabName.charAt(0).toUpperCase() + tabName.slice(1)}`);
        }

        function showToast(message) {
            const toast = document.getElementById('toast');
            const toastMessage = document.getElementById('toastMessage');
            toastMessage.textContent = message;
            toast.classList.add('show');
            
            setTimeout(() => {
                toast.classList.remove('show');
            }, 3000);
        }

        const userMenuBtn = document.querySelector('#userMenu button');
        const userMenuDropdown = document.querySelector('#userMenu div.absolute');
        
        userMenuBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            userMenuDropdown.classList.toggle('hidden');
        });

        document.addEventListener('click', () => {
            userMenuDropdown.classList.add('hidden');
        });

        document.querySelectorAll('.heart-icon').forEach(heart => {
            heart.addEventListener('click', function(e) {
                e.stopPropagation();
                this.classList.toggle('liked');
                const isLiked = this.classList.contains('liked');
                showToast(isLiked ? 'Added to wishlist' : 'Removed from wishlist');
            });
        });

        document.querySelectorAll('.address-card').forEach(card => {
            card.addEventListener('click', function() {
                document.querySelectorAll('.address-card').forEach(c => {
                    c.classList.remove('selected');
                    c.classList.remove('border-blue-500');
                    c.classList.add('border-gray-200');
                });
                this.classList.add('selected');
                this.classList.remove('border-gray-200');
                this.classList.add('border-blue-500');
            });
        });

        document.querySelectorAll('button').forEach(btn => {
            if (btn.textContent.includes('Add to Cart')) {
                btn.addEventListener('click', function(e) {
                    e.stopPropagation();
                    this.innerHTML = '<i class="fa-solid fa-check mr-2"></i>Added';
                    this.classList.add('bg-green-600');
                    this.classList.remove('bg-blue-600');
                    
                    showToast('Product added to cart!');
                    
                    setTimeout(() => {
                        this.innerHTML = 'Add to Cart';
                        this.classList.remove('bg-green-600');
                        this.classList.add('bg-blue-600');
                    }, 2000);
                });
            }
        });

        window.addEventListener('load', () => {
            document.querySelectorAll('.animate-slide-up').forEach((el, index) => {
                el.style.opacity = '0';
                setTimeout(() => {
                    el.style.transition = 'all 0.6s ease-out';
                    el.style.opacity = '1';
                    el.style.transform = 'translateY(0)';
                }, index * 100);
            });
        });

        const progressBars = document.querySelectorAll('.bg-gradient-to-r.from-blue-500');
        progressBars.forEach(bar => {
            const width = bar.style.width;
            bar.style.width = '0%';
            setTimeout(() => {
                bar.style.transition = 'width 1s ease-out';
                bar.style.width = width;
            }, 500);
        });
 