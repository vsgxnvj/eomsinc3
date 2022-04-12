<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>EOMSINC</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
  <link href="{{ asset('css/app.css ') }}" rel="stylesheet">
  <link href="https://rawgit.com/Jopzik/botones-redes/master/style.css" rel="stylesheet">
  
</head>




<style>
  @import url("https://fonts.googleapis.com/css?family=Open+Sans");
*,
*::before,
*::after {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

.header {
  width: 100%;
  height: 100vh;
  background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.75)), url("https://s5.postimg.cc/wvarhs3hz/bg-flexky.jpg");
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center center;
  background-attachment: fixed;
}

main {
  width: 100%;
  padding: 5% 10%;
  background-color: #f2f2f2;
}
main section {
  margin-bottom: 50px;
  color: #222;
}
main section h2 {
  font-size: 3em;
  font-family: sans-serif;
  margin-bottom: 10px;
}
main section p {
  font-size: 1.1em;
  line-height: 1.5;
}
main .inspired {
  display: inline-block;
  position: fixed;
  bottom: 20px;
  right: 40px;
  padding: 5px 10px;
  line-height: 2em;
  background-color: #263238;
  color: #fff;
  text-decoration: none;
  font-family: sans-serif;
  font-weight: bold;
}

.flexky {
  position: fixed;
  width: 100%;
  height: 60px;
  transition: background-color 0.3s;
}
@media screen and (max-width: 900px) {
  .flexky {
    background-color: #263238;
  }
}
.flexky--scroll {
  background-color: #263238;
  box-shadow: 0 2px 3px 0 rgba(0, 0, 0, 0.5);
}
.flexky--scroll .flexky__img {
  width: 45px;
  height: 45px;
  top: 7.5px;
  transform: translateY(0);
}
.flexky__button {
  display: none;
}
@media screen and (max-width: 900px) {
  .flexky__button {
    display: flex;
    flex-wrap: wrap;
    align-content: space-between;
    width: 25px;
    height: 25px;
    margin: 17.5px;
    float: right;
    cursor: pointer;
  }
}
.flexky__button span {
  display: block;
  width: 100%;
  height: 4px;
  background-color: #fff;
}
.flexky__container {
  display: flex;
  justify-content: space-between;
  width: 95%;
  max-width: 1000px;
  margin: 0 auto;
  list-style: none;
  background-color: transparent;
}
@media screen and (max-width: 900px) {
  .flexky__container {
    display: block;
    width: 300px;
    height: 100vh;
    margin: 0;
    background-color: #11171a;
    transform: translate(-300px, 60px);
    transition: transform 0.3s ease-in-out;
  }
  .flexky__container--active {
    transform: translate(0, 60px);
  }
}
.flexky__link {
  display: block;
  color: #fff;
  text-decoration: none;
  font-family: "Open Sans", sans-serif;
  line-height: 60px;
  transition: all 0.3s;
}
@media screen and (max-width: 900px) {
  .flexky__link {
    padding-left: 15px;
    line-height: 3;
    background-color: #11171a;
    box-shadow: 0 0 #fff inset, 0 0 #07090a inset;
  }
  .flexky__link:hover {
    padding-left: 20px;
    box-shadow: 5px 0 #fff inset, 300px 0 #07090a inset;
  }
}
.flexky__img {
  display: block;
  position: relative;
  top: 50vh;
  transform: translateY(-50%);
  width: 300px;
  height: 300px;
  transition: all 0.3s;
}
@media screen and (max-width: 900px) {
  .flexky__img {
    display: none;
  }
}
</style>





<body>

  @include('inc.navbar')
  @yield('content')


</body>

<script>

    window.addEventListener("load", () => {
    let flexky = document.getElementById("flexky"),
    open = document.getElementById("btn-menu"),
    menu = document.getElementById("flexky-menu");
    if (window.pageYOffset > 100) flexky.classList.add("flexky--scroll");
    window.addEventListener("scroll", () => {
      window.pageYOffset > 100 && window.innerWidth > 900 ? flexky.classList.add("flexky--scroll") : flexky.classList.remove("flexky--scroll");
    });
    open.addEventListener("click", () => {
      menu.classList.toggle("flexky__container--active");
    });
  });

</script>



</html>