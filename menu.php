<html>
<head>
<style>
.mainmenubtn {
    background-color: #867070;
    color: white;
    border: none;
    cursor: pointer;
    padding:20px;
    margin-top:20px;
}
.mainmenubtn:hover {
    background-color: #D5B4B4;
    }
.dropdown {
    position: relative;
    display: inline-block;
}
.dropdown-child {
    display: none;
    background-color:#867070;
    min-width: 200px;
}
.dropdown-child a {
    color: #F5EBEB;
    padding: 20px;
    text-decoration: none;
    display: block;
}
.dropdown:hover .dropdown-child {
    display: block;
}
</style>
</head>
<body>
<div class="dropdown">
  <button class="mainmenubtn">MENU</button>
  <div class="dropdown-child">
    <a href="logout.php">Logout</a>
    <a href="login.php">Login</a>
    <a href="tambah.php">Tambah Data Baru</a>
  </div>
</div>
</body>
</html>