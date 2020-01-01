<script>
var countDownDate = new Date("Jan 25, 2020 0:0:0").getTime();
var countdownfunction = setInterval(function() {
    var now = new Date().getTime();
    var distance = countDownDate - now;
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    document.getElementById("ngay").innerHTML = days;
    document.getElementById("gio").innerHTML = hours;
    document.getElementById("phut").innerHTML = minutes;
    document.getElementById("giay").innerHTML = seconds;
    if (distance < 0) {
        clearInterval(countdownfunction);
        document.getElementById("demo").innerHTML = "EXPIRED";
    }
}, 1000);
</script>
<div class="Responsive">
    <div class="bgimg">
        <div class="container">
            <div>
                <h1 class="text-center">Sắp Đến Tết Rồi!</h1>
                <br/>
            </div>
            <div class="container-list">
                <div class="container-list-item">
                    <div class="item">
                        <div class="number" id="ngay"></div>
                        <div class="title">Ngày</div>
                    </div>
                </div>
                <div class="container-list-item">
                    <div class="item">
                        <div class="number" id="gio"></div>
                        <div class="title">Giờ</div>
                    </div>
                </div>
                <div class="container-list-item">
                    <div class="item">
                        <div class="number" id="phut"></div>
                        <div class="title">Phút</div>
                    </div>
                </div>
                <div class="container-list-item">
                    <div class="item">
                        <div class="number" id="giay"></div>
                        <div class="title">Giây</div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="text-center">
                <p class="slogan">Hoa đào nở, chim én về, mùa xuân lại đến. Chúc một năm mới : nghìn sự như ý, vạn sự như mơ, triệu sự bất ngờ, tỷ lần hạnh phúc.</p>
                <p class="sign"> Hồng Đức </p>
            </div>
        </div>
    </div>
</div>
