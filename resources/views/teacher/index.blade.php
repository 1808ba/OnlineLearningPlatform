  <!-- Logout form -->

{{--
En tant qu'enseignant, je veux pouvoir créer, modifier, supprimer et voir la liste de mes cours.
En tant qu'enseignant, je souhaite organiser mes cours par catégories et modules.

--}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>teacher page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<style>
*{
  padding: 0;
  margin: 0;
  text-decoration: none;
  list-style: none;
  box-sizing: border-box;
}
body{
  font-family: montserrat;

}
nav{
  background: #0082e6;
  height: 80px;
  width: 100%;
}
label.logo{
  color: white;
  font-size: 35px;
  line-height: 80px;
  padding: 0 100px;
  font-weight: bold;
}
nav ul{
  float: right;
  margin-right: 20px;
}
nav ul li{
  display: inline-block;
  line-height: 80px;
  margin: 0 5px;
}
nav ul li a{
  color: white;
  font-size: 17px;
  padding: 7px 13px;
  border-radius: 3px;
  text-transform: uppercase;
}
a.active,a:hover{
  background: #1b9bff;
  transition: .5s;
}

.checkbtn{
  font-size: 30px;
  color: white;
  float: right;
  line-height: 80px;
  margin-right: 40px;
  cursor: pointer;
  display: none;
}
#check{
  display: none;
}
@media (max-width: 952px){
  label.logo{
    font-size: 30px;
    padding-left: 50px;
  }
  nav ul li a{
    font-size: 16px;
  }
}
@media (max-width: 858px){
  .checkbtn{
    display: block;
  }
  ul{
    position: fixed;
    width: 100%;
    height: 100vh;
    background: #2c3e50;
    top: 80px;
    left: -100%;
    text-align: center;
    transition: all .5s;
  }
  nav ul li{
    display: block;
    margin: 50px 0;
    line-height: 30px;
  }
  nav ul li a{
    font-size: 20px;
  }
  a:hover,a.active{
    background: none;
    color: #0082e6;
  }
  #check:checked ~ ul{
    left: 0;
  }
}
section{
    display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
}
.container{
    display: grid;
    justify-items: center;
    justify-content: center;
    grid-template-columns: 200px 200px 200px;
    gap: 10px;

}
.categorer{
    border: 2px solid black;
    /* height: 40px; */
    border-radius: 10px;
    /* padding-left: 60px; */
    /* padding-right: 60px; */
    /* padding: 15px; */
    /* padding-top: 3px; */
    padding: 60px;
    margin: 20px;

}

</style>


<body>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
          <i class="fas fa-bars"></i>
        </label>
        <label class="logo">DesignX</label>

        <ul>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-inline">

          <li><a class="active" href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Services</a></li>
            @csrf
            <li><button type="submit" class="btn btn-danger" style="border: none;background:none;font-weight:bold;font-size:50px;"><a href="#" onmouseover="this.style.backgroundColor='#000066';" onmouseout="this.style.backgroundColor='';">Logout</a></button></li>



        </form>

        </ul>
      </nav>



<section>
<div class="container">
    <div class="categorer">
       <a href="" class="catWeb">web</a>
    </div>
    <div class="categorer">
       <a href="" class="catMob">mobile</a>
    </div>
    <div class="categorer">
        <a href="" class="catDesk">desktop</a>
    </div>
</div></section>
</body>
</html>
