
        window.addEventListener('load', () => {
            setTimeout(() => {
                const loader = document.getElementById('loader');
                loader.style.opacity = '0';
                setTimeout(() => {
                    loader.style.display = 'none';
                }, 500);
            }, 1500);
        });

        const sidebarToggle = document.getElementById('sidebarToggle');
        const sidebar = document.getElementById('sidebar');
        
        sidebarToggle.addEventListener('click', () => {
            sidebar.classList.toggle('-translate-x-full');
        });

        document.addEventListener('click', (e) => {
            if (window.innerWidth < 1024) {
                if (!sidebar.contains(e.target) && !sidebarToggle.contains(e.target)) {
                    sidebar.classList.add('-translate-x-full');
                }
            }
        });

        const notificationBtn = document.getElementById('notificationBtn');
        const notificationDropdown = document.getElementById('notificationDropdown');
        
        notificationBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            notificationDropdown.classList.toggle('hidden');
            profileDropdown.classList.add('hidden');
        });

        const profileBtn = document.getElementById('profileBtn');
        const profileDropdown = document.getElementById('profileDropdown');
        
        profileBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            profileDropdown.classList.toggle('hidden');
            notificationDropdown.classList.add('hidden');
        });

        document.addEventListener('click', () => {
            notificationDropdown.classList.add('hidden');
            profileDropdown.classList.add('hidden');
        });

        const ctx = document.getElementById('salesChart').getContext('2d');
        
        const gradient1 = ctx.createLinearGradient(0, 0, 0, 400);
        gradient1.addColorStop(0, 'rgba(59, 130, 246, 0.3)');
        gradient1.addColorStop(1, 'rgba(59, 130, 246, 0.0)');
        
        const gradient2 = ctx.createLinearGradient(0, 0, 0, 400);
        gradient2.addColorStop(0, 'rgba(139, 92, 246, 0.3)');
        gradient2.addColorStop(1, 'rgba(139, 92, 246, 0.0)');

        const salesChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
                datasets: [{
                    label: 'Revenue ($)',
                    data: [4200, 5800, 4900, 6200, 7500, 8900, 7200],
                    borderColor: '#3b82f6',
                    backgroundColor: gradient1,
                    borderWidth: 3,
                    tension: 0.4,
                    fill: true,
                    pointBackgroundColor: '#3b82f6',
                    pointBorderColor: '#fff',
                    pointBorderWidth: 2,
                    pointRadius: 6,
                    pointHoverRadius: 8
                }, {
                    label: 'Orders',
                    data: [45, 62, 52, 68, 82, 95, 78],
                    borderColor: '#8b5cf6',
                    backgroundColor: gradient2,
                    borderWidth: 3,
                    tension: 0.4,
                    fill: true,
                    pointBackgroundColor: '#8b5cf6',
                    pointBorderColor: '#fff',
                    pointBorderWidth: 2,
                    pointRadius: 6,
                    pointHoverRadius: 8,
                    yAxisID: 'y1'
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                interaction: {
                    mode: 'index',
                    intersect: false,
                },
                plugins: {
                    legend: {
                        display: true,
                        position: 'top',
                        labels: {
                            usePointStyle: true,
                            padding: 20,
                            font: {
                                size: 12,
                                family: 'Poppins'
                            }
                        }
                    },
                    tooltip: {
                        backgroundColor: 'rgba(255, 255, 255, 0.9)',
                        titleColor: '#1f2937',
                        bodyColor: '#1f2937',
                        borderColor: '#e5e7eb',
                        borderWidth: 1,
                        padding: 12,
                        displayColors: true,
                        boxPadding: 4,
                        usePointStyle: true,
                        callbacks: {
                            label: function(context) {
                                let label = context.dataset.label || '';
                                if (label) {
                                    label += ': ';
                                }
                                if (context.parsed.y !== null) {
                                    label += context.parsed.y;
                                    if (context.datasetIndex === 0) {
                                        label = 'Revenue: $' + context.parsed.y.toLocaleString();
                                    } else {
                                        label = 'Orders: ' + context.parsed.y;
                                    }
                                }
                                return label;
                            }
                        }
                    }
                },
                scales: {
                    x: {
                        grid: {
                            display: false
                        },
                        ticks: {
                            font: {
                                family: 'Poppins'
                            }
                        }
                    },
                    y: {
                        type: 'linear',
                        display: true,
                        position: 'left',
                        grid: {
                            borderDash: [5, 5],
                            color: '#f3f4f6'
                        },
                        ticks: {
                            callback: function(value) {
                                return '$' + value.toLocaleString();
                            },
                            font: {
                                family: 'Poppins'
                            }
                        }
                    },
                    y1: {
                        type: 'linear',
                        display: true,
                        position: 'right',
                        grid: {
                            drawOnChartArea: false,
                        },
                        ticks: {
                            font: {
                                family: 'Poppins'
                            }
                        }
                    }
                }
            }
        });

        const progressBars = document.querySelectorAll('.progress-fill');
        const animateProgress = (entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.width = entry.target.style.getPropertyValue('--progress-width');
                }
            });
        };

        const progressObserver = new IntersectionObserver(animateProgress, {
            threshold: 0.5
        });

        progressBars.forEach(bar => progressObserver.observe(bar));

        function updateClock() {
            const now = new Date();
            const timeString = now.toLocaleTimeString('en-US', { 
                hour: '2-digit', 
                minute: '2-digit',
                hour12: true 
            });
        }
        setInterval(updateClock, 1000);

        document.querySelectorAll('.table-row-hover').forEach(row => {
            row.addEventListener('mouseenter', function() {
                this.style.backgroundColor = 'rgba(59, 130, 246, 0.05)';
            });
            row.addEventListener('mouseleave', function() {
                this.style.backgroundColor = 'transparent';
            });
        });

        setInterval(() => {
            const statValues = document.querySelectorAll('.text-3xl.font-bold');
            const randomIndex = Math.floor(Math.random() * statValues.length);
            const element = statValues[randomIndex];
            
            element.style.transform = 'scale(1.1)';
            element.style.color = '#3b82f6';
            setTimeout(() => {
                element.style.transform = 'scale(1)';
                element.style.color = '';
            }, 300);
        }, 10000);
    