(function($) {
    $(function() {

        var Carousel = {
            body: $(".js-carousel"),
            context: $(".js-carouselCtx"),
            list: $(".js-carouselList"),
            itemLength: $(".js-carouselList .Carousel-content-item").length,
            isScrolling: false,
            isNeedToBack: false,
            currentX: 0,
            currentItem: 1

        }
        var move = function(e) {
            Carousel.currentX = e.pageX;
            Carousel.startX = Carousel.currentX;
            window.addEventListener("mousemove", carouselGrabbing);
            window.addEventListener("mouseup", carouselStop);
        }
        var isGiftScrolling = false;

        /************************window**********************/
        setUpCasousel();

        $(window).on("load resize", function() {
            carouselSetUp();
        });
        /***************************************************/


        function carouselGrabbing(e) {
            var distanceX = e.pageX - Carousel.currentX;
            Carousel.currentX = e.pageX;
            Carousel.list.css({
                left: Carousel.list.position().left + distanceX
            });
            if (e.pageX - Carousel.startX >= 50) {
                Carousel.isNeedToBack = false;
                Carousel.currentItem--;
                scrollCarousel(Carousel.currentItem);
                window.removeEventListener("mousemove", carouselGrabbing);
                window.removeEventListener("mouseup", carouselStop);
            } else if (Carousel.startX - e.pageX >= 50) {
                Carousel.isNeedToBack = false;
                Carousel.currentItem++;
                scrollCarousel(Carousel.currentItem);
                window.removeEventListener("mousemove", carouselGrabbing);
                window.removeEventListener("mouseup", carouselStop);
            }
        }

        function carouselStop(e) {
            window.removeEventListener("mousemove", carouselGrabbing);
            window.removeEventListener("mouseup", carouselStop);
            if (Carousel.isNeedToBack) {
                var carouselItem = $("#carousel" + Carousel.currentItem);
                Carousel.list.animate({
                        left: 0 - carouselItem.position().left
                    },
                    400,
                    function() {
                        Carousel.isScrolling = false;
                    }
                );
            }
        }

        function scrollCarousel(index) {
            Carousel.isScrolling = true;
            Carousel.isNeedToBack = true;
            var carouselItem = $("#carousel" + index);
            if (carouselItem.length == 0) {
                isScrolling = false;
                return;
            }
            if (carouselItem.hasClass("Cloned")) {
                index = carouselItem.attr("data-index");
                var realItem = $("#carousel" + index);
                Carousel.currentItem = index;
            }
            $(".Carousel-nav-item--active").removeClass("Carousel-nav-item--active");
            $(".js-carouselNavItem[data-index=" + index + "]").addClass("Carousel-nav-item--active");
            Carousel.list.animate({
                    "left": 0 - carouselItem.position().left
                }, 500,
                function() {
                    if (carouselItem.hasClass("Cloned")) {
                        Carousel.list.css("left", 0 - realItem.position().left);
                    }
                    Carousel.isScrolling = false;

                });
        }

        function setUpCasousel() {
            var realFirstItem = Carousel.list.find(".Carousel-content-item").first();
            var firstItem = realFirstItem.clone();
            var firstItemIndex = Carousel.itemLength + 1;
            firstItem.attr("id", "carousel" + firstItemIndex);
            firstItem.addClass('Cloned');

            var lastItem = Carousel.list.find(".Carousel-content-item").last().clone();
            var lastItemIndex = 0;
            lastItem.attr("id", "carousel" + lastItemIndex);
            lastItem.addClass('Cloned');

            Carousel.list.append(firstItem);
            Carousel.list.prepend(lastItem);
            Carousel.list.css("left", 0 - realFirstItem.position().left);
        }
        /** quy định cao cho carousel**/

        function carouselSetUp() {
            var mWidth = Carousel.body.width();
            var mHeight = mWidth / 2.0769;
            Carousel.context.height(mHeight);
        }
        /***************************************************/


        $(".js-locationBtn").click(function() {
            var mParent = $(this).parent();
            mParent.toggleClass('Menu-brand-search-location--active')
        });
        /*đổi location*/
        $(".js-locationOpt").click(function() {
            var mLocation = $(this).find('span').text();
            var location = $('.js-locationBtn')
            location.text(mLocation);
            location.parent().removeClass('Menu-brand-search-location--active');
        });
        /*hiện nav sp và không roll*/
        $(".js-navHamburger").click(function() {
            $('.js-nav').toggleClass('Nav--active')
            if ($(".js-nav").hasClass("Nav--active")) {
                $("body").addClass("Noscroll");
            } else {
                $("body").removeClass("Noscroll");
            }
        });
        /*****************Carousel****************/



        $(".js-carouselList img").on("mousedown", function(e) {
            e.preventDefault();
        });

        Carousel.list.on("mousedown", move);

        /*****Làm cho banner chạy ngang theo nút*****/
        $(".js-carouselNavItem").click(function() {
            if ($(this).hasClass("Carousel-nav-item--active")) {
                return;
            }
            var index = $(this).attr("data-index");
            Carousel.currentItem = index;
            scrollCarousel(Carousel.currentItem);
        });

        $(".js-carouselBtn").click(function() {
            if (Carousel.isScrolling) {
                return;
            }
            if ($(this).hasClass("Carousel-content__btn--right")) {
                Carousel.isNeedToBack = false;
                Carousel.currentItem++;
                scrollCarousel(Carousel.currentItem);
                window.removeEventListener("mousemove", carouselGrabbing);
                window.removeEventListener("mouseup", carouselStop);
            } else {
                Carousel.isNeedToBack = false;
                Carousel.currentItem--;
                scrollCarousel(Carousel.currentItem);
                window.removeEventListener("mousemove", carouselGrabbing);
                window.removeEventListener("mouseup", carouselStop);
            }
            if (Carousel.currentItem > Carousel.itemLength) {
                Carousel.currentItem = 1;
            } else if (Carousel.currentItem < 1) {
                Carousel.currentItem = Carousel.itemLength;
            }
            scrollCarousel(Carousel.currentItem);

        });
        /*****************Sold Out****************/

        $(".js-productSoldoutBtn").click(function() {
            if (isGiftScrolling) {
                return;
            }
            isGiftScrolling = true;
            var parent = $(this).parent();
            if (parent.hasClass("Product-content-item-soldout--active")) {
                parent.removeClass('Product-content-item-soldout--active');
                setTimeout(function() {
                    parent.find(".Product-content-item-soldout-detail").hide();
                    isGiftScrolling = false;
                }, 500);
            } else {
                parent.find(".Product-content-item-soldout-detail").show();
                setTimeout(function() {
                    parent.addClass("Product-content-item-soldout--active");
                    isGiftScrolling = false;
                }, 20);
            }
        });

        /*****************Cart****************/
        $(".js-productCartBtn").click(function() {
            var cartNum = $(".js-cartView").attr("data-count");
            var soldOut = false;
            cartNum++;
            //them vao cookie hoac cap nhat len server user id
            var parent = $(this).closest(".Product-content-item");
            var productName = parent.find(".Product-content-item-detail__name").text();
            if (parent.hasClass("Product-content-item-soldout")) {
                soldOut = true;
            } else {
                soldOut = false;
            }

            $(".js-cartView").attr("data-count", cartNum++);
            showNotificaton(productName, cartNum % 2 === 0);
        });

        setTimeout(function() {
            $(".js-cart").removeClass("Cart--disable");

        }, 1000);
        /*****************Sold Out****************/
        var Notification = {
            body: $(".js-Noti"),
            message: $(".js-NotiMess")
        }
        var myTimeout;

        function showNotificaton(productName, isError) {
            console.log(isError);
            if (Notification.body.hasClass("Notification--active")) {
                clearTimeout(myTimeout);
                closeNotification(true, productName, isError);
                return;
            }
            Notification.body.attr("data-error", isError);
            Notification.message.text("Thêm sản phẩm " + productName + " thành công");
            Notification.body.addClass("Notification--active");
            myTimeout = setTimeout(closeNotification, 4000);
        }

        function closeNotification(isReopen = false, newProductName = "", isError = 0) {
            Notification.body.removeClass("Notification--active");
            if (isReopen) {
                setTimeout(function() {
                    showNotificaton(newProductName, isError);
                }, 500);
            }
        }






    });



})(jQuery);
