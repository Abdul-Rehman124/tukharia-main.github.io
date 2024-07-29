<?php include 'includes/head.php'; ?>

<?php include 'includes/header.php'; ?>



<section class="contact pt-5">
    <div class="container contact-us">
        <div class="container">
            <div class="apply">
            <div class="col-lg-7 p-5">
                <div class="contact-form">
                    <h4 class="green">Apply</h4>
                        
                    <form action="" class="apply-form">
                        <div class="row mt-5">
                            <div class="col-lg-6">
                                <label for="">First Name</label>
                                <input type="text">
                            </div>
                            <div class="col-lg-6">
                                <label for="">Last Name</label>
                                <input type="text">
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-lg-6">
                                <label for="">Email</label>
                                <input type="email">
                            </div>
                            <div class="col-lg-6">
                                <label for="">Phone Number</label>
                                <input type="tel">
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-lg-12">
                                <label for="">Message</label>
                                <textarea name="" id="" rows="2" placeholder="Write your message.."></textarea>
                            </div>
                            <div class="col-lg-12 d-flex justify-content-end mt-5">
                                <button type="submit" class="login-btn">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            </div>
        </div>
    </div>
</section>


</div>
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".mySwiper", {
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });
  document.addEventListener("DOMContentLoaded", function() {
    const attachmentIcons = document.querySelectorAll(".hoverable");

    attachmentIcons.forEach(icon => {
        icon.addEventListener("click", function(event) {
            const heading = event.target.closest(".hoverable");
            const pageLink = window.location.href.split('#')[0];
            const elementId = heading.id;
            const elementLink = `${pageLink}#${elementId}`;

            navigator.clipboard.writeText(elementLink).then(() => {
                alert(`Link copied to clipboard: ${elementLink}`);
            }).catch(err => {
                console.error('Failed to copy: ', err);
            });
        });
    });
});


document.addEventListener("DOMContentLoaded", function() {
    const header = document.getElementById("mainHeader");
    const stickyOffset = header.offsetTop;

    function handleScroll() {
        if (window.pageYOffset > stickyOffset) {
            header.classList.add("fixed");
        } else {
            header.classList.remove("fixed");
        }
    }

    window.addEventListener("scroll", handleScroll);
});
document.addEventListener("DOMContentLoaded", function() {
    const searchSection = document.getElementById("searchSection");
    const openSearchBtn = document.querySelector(".open-search");
    const closeSearchBtn = document.querySelector(".close-search");

    openSearchBtn.addEventListener("click", function() {
        searchSection.classList.add("active");
    });

    closeSearchBtn.addEventListener("click", function() {
        searchSection.classList.remove("active");
    });
});
</script>