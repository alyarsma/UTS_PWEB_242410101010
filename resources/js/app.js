document.addEventListener("DOMContentLoaded", function () {
    const btn = document.getElementById("menu-btn");
    const menu = document.getElementById("menu");

    if (btn && menu) {
        btn.addEventListener("click", function () {
            menu.classList.toggle("max-h-0");
            menu.classList.toggle("max-h-[500px]");
            menu.classList.toggle("py-5");
        });
    }

    const profileBtnMobile = document.getElementById("profile-btn-mobile");
    const profileBtnDesktop = document.getElementById("profile-btn-desktop");
    const profileMenu = document.getElementById("profile-menu");

    [profileBtnMobile, profileBtnDesktop].forEach(function (profileBtn) {
        if (profileBtn && profileMenu) {
            profileBtn.addEventListener("click", function () {
                profileMenu.classList.toggle("hidden");
            });
        }
    });

    document.querySelectorAll(".faq-btn").forEach(function (btn) {
    btn.addEventListener("click", function () {
        const content = btn.nextElementSibling;
        const icon = btn.querySelector(".faq-icon");

        content.classList.toggle("hidden");

        if (icon) {
            if (content.classList.contains("hidden")) {
                icon.textContent = "+";
                icon.classList.remove("rotate-45");
            } else {
                icon.textContent = "+";
                icon.classList.add("rotate-45");
            }
        }
    });
});

    const toggle = document.getElementById("togglePassword");
    const password = document.getElementById("password");
    const eyeIcon = document.getElementById("eyeIcon");

    if (toggle && password && eyeIcon) {
        toggle.addEventListener("click", function () {
            if (password.type === "password") {
                password.type = "text";

                eyeIcon.innerHTML = `
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                `;
            } else {
                password.type = "password";

                eyeIcon.innerHTML = `
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 3l18 18" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10.584 10.587A2 2 0 0012 14a2 2 0 001.414-.586" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9.88 4.24A10.4 10.4 0 0112 4c5 0 9 4 10 8a11.7 11.7 0 01-3.23 5.03" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M6.11 6.1A11.7 11.7 0 002 12c1 4 5 8 10 8a10.7 10.7 0 005.89-1.75" />
                `;
            }
        });
    }

    const searchInput = document.getElementById("searchInput");
    const categoryFilters = document.querySelectorAll(".categoryFilter");
    const priceFilter = document.getElementById("priceFilter");
    const priceText = document.getElementById("priceText");
    const cards = document.querySelectorAll(".kostum-card");

    if (searchInput && priceFilter && priceText && cards.length > 0) {
        function formatRupiah(value) {
            return "Rp" + Number(value).toLocaleString("id-ID");
        }

        function filterKostum() {
            const keyword = searchInput.value.toLowerCase();
            const maxPrice = Number(priceFilter.value);

            const selectedCategories = Array.from(categoryFilters)
                .filter(function (c) {
                    return c.checked;
                })
                .map(function (c) {
                    return c.value;
                });

            cards.forEach(function (card) {
                const name = card.dataset.name;
                const category = card.dataset.category;
                const price = Number(card.dataset.price);

                const matchSearch = name.includes(keyword);
                const matchCategory =
                    selectedCategories.length === 0 ||
                    selectedCategories.includes(category);
                const matchPrice = price <= maxPrice;

                if (matchSearch && matchCategory && matchPrice) {
                    card.classList.remove("hidden");
                } else {
                    card.classList.add("hidden");
                }
            });

            priceText.textContent = formatRupiah(maxPrice);
        }

        searchInput.addEventListener("input", filterKostum);
        priceFilter.addEventListener("input", filterKostum);

        categoryFilters.forEach(function (cb) {
            cb.addEventListener("change", filterKostum);
        });
    }
});

