        <div class="nav-side">
            <div class="bio">
                <img src="images/profil.png" alt="profil">
                <div class="paragraf">

                    <span class="row">
                        <a href="main.php">Obed Syaiful Aprilia</a>
                    </span>
                    <!-- <span class="row">
                        <ipk>3.78</ipk> /
                        <sks>23 SKS</sks>
                    </span> -->
                </div>

            </div>
            <div class="nav-menu">
                <div class="sub-menu">
                    <div class="index"></div>
                    <img src="images/toga.png" alt="icon">
                    <a href="krs.php">KRS</a>
                    <div class="segitiga"></div>
                </div>

                <div class="sub-menu">
                    <div class="index"></div>
                    <img src="images/print.png" alt="icon">
                    <a href="cetak_jadwal.php">Cetak Jadwal</a>
                    <div class="segitiga"></div>
                </div>

                <div class="sub-menu">
                    <div class="index"></div>
                    <img src="images/setting.png" alt="icon">
                    <?php 
                      echo '<a href="profil_edit.php?NIM='.$_SESSION['username'].'">Edit Profil</a>';
                    ?> 
                    <div class="segitiga"></div>
                </div>

                <div class="sub-menu">
                    <div class="index"></div>
                    <img src="images/logout1.png" alt="icon">
                    <a href="../logout.php">Logout</a>
                    <div class="segitiga"></div>
                </div>

                
            </div>
        </div>
     



    <!-- script togle menu -->
    <!-- <script>
        $(document).ready(() => {
            var status = false;
            $(".menu").click(() => {
                if (status) {
                    $(".nav-side").css("opacity", 0);

                    status = false;
                } else {
                    $(".nav-side").css("opacity", 1);


                    status = true;
                }
            });

            $(".sub-menu").click(function() {
                $(".sub-menu .segitiga").css("opacity", "0");
                $(".sub-menu").css("background", "transparent");
                $(this).children(".segitiga").css("opacity", "1");
                $(this).css("background", "#48c6d7");

            });

            $(".content").click(() => {
                $(".nav-side").css("opacity", 0);
                status = false;
            })
        });
    </script> -->
