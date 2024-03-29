<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="css/images/iconweb.png">
    <title>Langit Senjat Technology</title>
</head>

<body>
    <!--navbar-->
    <nav class="navbar navbar-expand-xl navbar-dark fixed-top position-sticky shadow-sm" class="nv">
        <div class="container">
            <a class="navbar-brand font-weight-bold" href="index.php">
                <img src="css/images/iconweb.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy"> Langit Senja Technology
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item " style="margin-right: 20px;">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item active" style="margin-left: -20px;">
                        <a class="nav-link" href="tips.php">Tutorial</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="paket.php">Paket Langganan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php"> 
                            <image src="css/images/iconlogin.png" style="width: 30px;"></image>
                            Login
                        </a>
                    </li>
                   
                </ul>
            </div>
        </div>
    </nav>

    <!--main-->

    <div class="container" id="bd">
        <div class="row">
            <div class="col-sm-8">
                <div class="card-body shadow p-3 mb-5 bg-white rounded">

                    <h5 class="card-title font-weight-bold">Apa itu Vue.js? </h5>
                    <p class="card-text">Vue (cara pengucapannya /vjuː/, seperti view) adalah sebuah kerangka kerja nan progresif untuk membangun antarmuka pengguna. Tidak seperti beberapa kerangka kerja monolitik yang lain, Vue dirancang dari dasar sekali agar dapat diadopsi
                        secara bertahap. Pustaka intinya difokuskan pada layer tampilan saja, dan sangat mudah untuk diintegrasikan dengan pustaka yang lain atau dengan proyek yang sudah ada. Di sisi lain, Vue sangat mampu memberikan dan mendukung Single
                        Page Application yang canggih ketika dikombinasikan dengan perkakas modern dan dukungan pustaka.</p>
                    <h5 class="card-title font-weight-bold">Cara menggunakan Vue.js </h5>
                    <p class="card-text">Cara yang paling mudah untuk mencoba Vue.js adalah dengan menggunakan JSFiddle Contoh Hello World. Jangan ragu untuk mencobanya di tab lain dan ikuti bagaimana kami memberikan contoh dasar. Atau, anda bisa membuat sebuah fileindex.html
                        dan isikan script dibawah ini:</p>
                    <div class="cd">
                        <pre style="color:#f8f8f2;background-color:#282a36;-moz-tab-size:4;-o-tab-size:4;tab-size:4"><code class="language-html" data-lang="html">&lt;<span style="color:#ff79c6">script</span> <span style="color:#50fa7b">src</span><span style="color:#ff79c6">=</span><span style="color:#f1fa8c">"https://cdn.jsdelivr.net/npm/vue"</span>&gt;&lt;/<span style="color:#ff79c6">script</span>&gt;
</code></pre>
                    </div>
                    <br>
                    <h5 class="card-tittle font-weight-bold">Contoh Vue.js</h5>
                    <p class="card-text">
                        Dalam contoh di bawah ini, objek Vue baru dibuat dengan <strong>Vue ()</strong> baru. Properti <strong>el:</strong> mengikat objek Vue baru ke elemen HTML dengan <strong>id = "app"</strong>.<br> <strong>Code :</strong>
                    </p>

                    <!--code editor-->
                    <div class="cd">
                        <pre style="color:#f8f8f2;-moz-tab-size:4;-o-tab-size:4;tab-size:4"><code class="language-html" data-lang="html"><span style="color:#6272a4">&lt;!-- elemen kontainer untuk aplikasi --&gt;</span>
&lt;<span style="color:#ff79c6">div</span> <span style="color:#50fa7b">id</span><span style="color:#ff79c6">=</span><span style="color:#f1fa8c">"app"</span>&gt;
    {{ message }}
&lt;/<span style="color:#ff79c6">div</span>&gt;
</code></pre>

                        <pre style="color:#f8f8f2;-moz-tab-size:4;-o-tab-size:4;tab-size:4"><code class="language-html" data-lang="html">&lt;<span style="color:#ff79c6">script</span>&gt;
    <span style="color:#8be9fd;font-style:italic">var</span> app <span style="color:#ff79c6">=</span> <span style="color:#ff79c6">new</span> Vue({
        el<span style="color:#ff79c6">:</span> <span style="color:#f1fa8c">"#app"</span>,
        data<span style="color:#ff79c6">:</span> {
            message<span style="color:#ff79c6">:</span> <span style="color:#f1fa8c">"Hello Sobat Tech!"</span>
        }
    })
&lt;/<span style="color:#ff79c6">script</span>&gt;
</code></pre>
                    </div>
                    <br>
                    <p class="card-title font-weight-bold"> Hasil :</p>
                    <!--vujs-->
                    <div id="app">
                        {{ message }}
                    </div>
                    <br>
                    <p class="card-text">
                        Kita telah berhasil membuat aplikasi Vue pertama kita! Jika kita perhatikan proses rendering nya masih sama seperti string template yang biasa, tetapi Vue disini sudah membantu banyak pekerjaan kita secara ajaib. Data yang ditampilkan sudah terhubung
                        dengan <strong>DOM</strong>, dan semuanya bersifat reaktif. Bagaimana kita bisa tahu hal tersebut? Silakan buka JavaScript konsol pada peramban anda (di halaman yang anda baca sekarang ini) dan <i>set</i>
                        <span style="color: rgb(255, 94, 0);">app.pesan</span> dengan nilai yang berbeda. Anda akan langsung melihat perubahan pesan yang baru saja Anda ketikkan/ubah.<br>
                        <br> Selain interpolasi teks, kita juga bisa langsung <strong><i>binding</i></strong> attribute pada elemen seperti dibawah ini:
                    </p>
                    <p class="card-text">
                        Nah, di Vuejs ada dua macam data <strong><i>binding</i></strong>:
                    </p>
                    <ol>
                        <li>One Way Binding (Satu arah)</li>
                        <li>Two Way Binding (Dua arah)</li>
                    </ol>
                    <P class="card-text"><strong><i>binding</i></strong> satu arah artinya, <strong><i>binding</i></strong> yang dilakukan hanya dalam satu arah saja (dari Javascript ke HTML).</P>

                    <!--Binding-->
                    <div class="cd">
                        <pre style="color:#f8f8f2;background-color:#282a36;-moz-tab-size:4;-o-tab-size:4;tab-size:4"><code class="language-html" data-lang="html"><span style="color:#ff79c6">&lt;!DOCTYPE html&gt;</span>
&lt;<span style="color:#ff79c6">html</span> <span style="color:#50fa7b">lang</span><span style="color:#ff79c6">=</span><span style="color:#f1fa8c">"en"</span>&gt;
&lt;<span style="color:#ff79c6">head</span>&gt;
    &lt;<span style="color:#ff79c6">meta</span> <span style="color:#50fa7b">charset</span><span style="color:#ff79c6">=</span><span style="color:#f1fa8c">"UTF-8"</span>&gt;
    &lt;<span style="color:#ff79c6">meta</span> <span style="color:#50fa7b">name</span><span style="color:#ff79c6">=</span><span style="color:#f1fa8c">"viewport"</span> <span style="color:#50fa7b">content</span><span style="color:#ff79c6">=</span><span style="color:#f1fa8c">"width=device-width, initial-scale=1.0"</span>&gt;
    &lt;<span style="color:#ff79c6">meta</span> <span style="color:#50fa7b">http-equiv</span><span style="color:#ff79c6">=</span><span style="color:#f1fa8c">"X-UA-Compatible"</span> <span style="color:#50fa7b">content</span><span style="color:#ff79c6">=</span><span style="color:#f1fa8c">"ie=edge"</span>&gt;
    &lt;<span style="color:#ff79c6">title</span>&gt;Aplikasi Vue #2: One Way Binding&lt;/<span style="color:#ff79c6">title</span>&gt;

    <span style="color:#6272a4">&lt;!-- Menyisipkan Vuejs dari CDN --&gt;</span>
    &lt;<span style="color:#ff79c6">script</span> <span style="color:#50fa7b">src</span><span style="color:#ff79c6">=</span><span style="color:#f1fa8c">"https://cdn.jsdelivr.net/npm/vue"</span>&gt;&lt;/<span style="color:#ff79c6">script</span>&gt;
&lt;/<span style="color:#ff79c6">head</span>&gt;
&lt;<span style="color:#ff79c6">body</span>&gt;

    <span style="color:#6272a4">&lt;!-- elemen kontainer untuk aplikasi --&gt;</span>
    &lt;<span style="color:#ff79c6">div</span> <span style="color:#50fa7b">id</span><span style="color:#ff79c6">=</span><span style="color:#f1fa8c">"app"</span>&gt;
        &lt;<span style="color:#ff79c6">input</span> <span style="color:#50fa7b">type</span><span style="color:#ff79c6">=</span><span style="color:#f1fa8c">"text"</span> <span style="color:#50fa7b">v-bind:value</span><span style="color:#ff79c6">=</span><span style="color:#f1fa8c">"message"</span>&gt;
        &lt;<span style="color:#ff79c6">p</span>&gt;{{ message }}&lt;/<span style="color:#ff79c6">p</span>&gt;
    &lt;/<span style="color:#ff79c6">div</span>&gt;
    
    <span style="color:#6272a4">&lt;!-- aplikasi Vue Hello --&gt;</span>
    &lt;<span style="color:#ff79c6">script</span>&gt;
        <span style="color:#8be9fd;font-style:italic">var</span> app <span style="color:#ff79c6">=</span> <span style="color:#ff79c6">new</span> Vue({
            el<span style="color:#ff79c6">:</span> <span style="color:#f1fa8c">"#app"</span>,
            data<span style="color:#ff79c6">:</span> {
                message<span style="color:#ff79c6">:</span> <span style="color:#f1fa8c">"Hello Sobat Tech!"</span>
            }
        })
    &lt;/<span style="color:#ff79c6">script</span>&gt;
&lt;/<span style="color:#ff79c6">body</span>&gt;
&lt;/<span style="color:#ff79c6">html</span>&gt;
</code></pre>
                    </div>
                    <br>
                    <p class="card-title font-weight-bold"> Hasil :</p>
                    <div id="app1">
                        <input type="text" v-bind:value="message">
                        <p>{{ message }}</p>
                    </div>
                    <p class="card-text">Inilah yang disebut <strong><i>binding satu arah</i></strong>, meskipun kita mengubah nilai message dari input field, data yang ada di kode Javascript-nya tidak akan ikut berubah.<br><br> Berikutnya kita akan coba binding dua arah,
                        silahkan buat kode aplikasinya seperti ini:</p>

                    <div class="cd">
                        <pre style="color:#f8f8f2;-moz-tab-size:4;-o-tab-size:4;tab-size:4"><code class="language-html" data-lang="html"><span style="color:#ff79c6">&lt;!DOCTYPE html&gt;</span>
&lt;<span style="color:#ff79c6">html</span> <span style="color:#50fa7b">lang</span><span style="color:#ff79c6">=</span><span style="color:#f1fa8c">"en"</span>&gt;
&lt;<span style="color:#ff79c6">head</span>&gt;
    &lt;<span style="color:#ff79c6">meta</span> <span style="color:#50fa7b">charset</span><span style="color:#ff79c6">=</span><span style="color:#f1fa8c">"UTF-8"</span>&gt;
    &lt;<span style="color:#ff79c6">meta</span> <span style="color:#50fa7b">name</span><span style="color:#ff79c6">=</span><span style="color:#f1fa8c">"viewport"</span> <span style="color:#50fa7b">content</span><span style="color:#ff79c6">=</span><span style="color:#f1fa8c">"width=device-width, initial-scale=1.0"</span>&gt;
    &lt;<span style="color:#ff79c6">meta</span> <span style="color:#50fa7b">http-equiv</span><span style="color:#ff79c6">=</span><span style="color:#f1fa8c">"X-UA-Compatible"</span> <span style="color:#50fa7b">content</span><span style="color:#ff79c6">=</span><span style="color:#f1fa8c">"ie=edge"</span>&gt;
    &lt;<span style="color:#ff79c6">title</span>&gt;Aplikasi Vue #2: One Way Binding&lt;/<span style="color:#ff79c6">title</span>&gt;

    <span style="color:#6272a4">&lt;!-- Menyisipkan Vuejs dari CDN --&gt;</span>
    &lt;<span style="color:#ff79c6">script</span> <span style="color:#50fa7b">src</span><span style="color:#ff79c6">=</span><span style="color:#f1fa8c">"https://cdn.jsdelivr.net/npm/vue"</span>&gt;&lt;/<span style="color:#ff79c6">script</span>&gt;
&lt;/<span style="color:#ff79c6">head</span>&gt;
&lt;<span style="color:#ff79c6">body</span>&gt;

    <span style="color:#6272a4">&lt;!-- elemen kontainer untuk aplikasi --&gt;</span>
    &lt;<span style="color:#ff79c6">div</span> <span style="color:#50fa7b">id</span><span style="color:#ff79c6">=</span><span style="color:#f1fa8c">"app"</span>&gt;
<span style="display:block;width:100%;background-color:#3d3f4a">        &lt;<span style="color:#ff79c6">input</span> <span style="color:#50fa7b">type</span><span style="color:#ff79c6">=</span><span style="color:#f1fa8c">"text"</span> <span style="color:#50fa7b">v-model:value</span><span style="color:#ff79c6">=</span><span style="color:#f1fa8c">"message"</span>&gt;
</span>        &lt;<span style="color:#ff79c6">p</span>&gt;{{ message }}&lt;/<span style="color:#ff79c6">p</span>&gt;
    &lt;/<span style="color:#ff79c6">div</span>&gt;
    
    <span style="color:#6272a4">&lt;!-- aplikasi Vue Hello --&gt;</span>
    &lt;<span style="color:#ff79c6">script</span>&gt;
        <span style="color:#8be9fd;font-style:italic">var</span> app <span style="color:#ff79c6">=</span> <span style="color:#ff79c6">new</span> Vue({
            el<span style="color:#ff79c6">:</span> <span style="color:#f1fa8c">"#app"</span>,
            data<span style="color:#ff79c6">:</span> {
                message<span style="color:#ff79c6">:</span> <span style="color:#f1fa8c">"Hello Sobat Tech!"</span>
            }
        })
    &lt;/<span style="color:#ff79c6">script</span>&gt;
&lt;/<span style="color:#ff79c6">body</span>&gt;
&lt;/<span style="color:#ff79c6">html</span>&gt;
</code></pre>

                    </div>
                    <br>
                    <p class="card-title font-weight-bold"> Hasil :</p>
                    <div id="app2">
                        <input type="text" v-model:value="message">
                        <p>{{ message }}</p>
                    </div>
                    <p class="card-text">Saat kita mengubah nilai dari input field, maka nilai yang ada di kode javascript-nya juga akan berubah.</p>
                    <p class="card-text">Inilah yang disebut <strong><i>two way binding</i></strong>.</p>
                </div>
            </div>




            <div class="col-sm-4">
                <div class="list-group ">
                    <a href="ht.php" class=" grid list-group-item list-group-item-action ">
                        <div class="row">
                            <div class="col-12">
                                <div class="align-middle"><img src="css/images/iconhtml.png" class="d-inline icon" width="24"> HTML
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="css.php" class=" grid list-group-item list-group-item-action ">
                        <div class="row">
                            <div class="col-12">
                                <div class="align-middle"><img src="css/images/iconcss.svg" class="d-inline icon" width="24"> CSS
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="js.php" class=" grid list-group-item list-group-item-action ">
                        <div class="row">
                            <div class="col-12">
                                <div class="align-middle"><img src="css/images/iconjavascript.png" class="d-inline icon" width="24"> Javascript
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="vue.php" class=" grid list-group-item list-group-item-action active">
                        <div class="row">
                            <div class="col-12">
                                <div class="align-middle"><img src="css/images/iconvue.png" class="d-inline icon" width="24"> Vue
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <button onclick="topFunction()" id="myBtn" title="Go to top">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-eject sv" viewBox="0 0 20 18">
    <path d="M7.27 1.047a1 1 0 0 1 1.46 0l6.345 6.77c.6.638.146 1.683-.73 1.683H1.656C.78 9.5.326 8.455.926 7.816L7.27 1.047zM14.346 8.5L8 1.731 1.654 8.5h12.692zM.5 11.5a1 1 0 0 1 1-1h13a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1h-13a1 1 0 0 1-1-1v-1zm14 0h-13v1h13v-1z"/></svg>
    </button>


    <footer class="footer">
        <div class="container">
            <h1 style="margin-left:-10px;">
            <image src="css/images/iconweb.png"></image>
            LSTECH
            </h1>
            <div class="row">
                <div class="col">
                    <h5 class=" font-weight-bold">About Me</h5>
                    <pre style="color: white;" class="align-items-center">
Made By
Ronald Adithya Rizkhie Soeharto
Rezha Mukti Kris Saputra
                    </pre>
                </div>
                <div class="col">
                    <a href="https://www.instagram.com/langitsenjatechnology/" style="color: white;">
                        <image src="css/images/instagramicon.png">
                        </image>
                        langitsenjatechnology
                    </a>
                </div>
                <div class="col">
                    <a href="https://www.youtube.com/channel/UCM7jnhpEdUlIU5M5BLvVFxQ" style="color: white;">
                        <image src="css/images/iconyoutube.png"></image>
                        Langit Senja Technology
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script src="js/java.js"></script>
</body>

</html>