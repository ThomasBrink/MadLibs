<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST'){

		$v1 = $_POST["v1"];
		$v2 = $_POST["v2"];
		$v3 = $_POST["v3"];
		$v4 = $_POST["v4"];
		$v5 = $_POST["v5"];
		$v6 = $_POST["v6"];
		$v7 = $_POST["v7"];

		$valuev1 = $v1;
		$valuev2 = $v2;
		$valuev3 = $v3;
		$valuev4 = $v4;
		$valuev5 = $v5;
		$valuev6 = $v6;
		$valuev7 = $v7;

		if($v1 == ""){
			$placeholderv1 = "Vul dit veld in.";
		}
		if($v2 == ""){
			$placeholderv2 = "Vul dit veld in.";
		}
		if($v3 == ""){
			$placeholderv3 = "Vul dit veld in.";
		}
		if($v4 == ""){
			$placeholderv4 = "Vul dit veld in.";
		}
		if($v5 == ""){
			$placeholderv5 = "Vul dit veld in.";
		}
		if($v6 == ""){
			$placeholderv6 = "Vul dit veld in.";
		}
		if($v7 == ""){
			$placeholderv7 = "Vul dit veld in.";
		}
		if($v1 != "" && $v2 != "" && $v3 != "" && $v4 != "" && $v5 != "" && $v6 != "" && $v7 != ""){
			$check = true;
		}
	}
?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link type="text/css" rel="stylesheet" href="style.css">
</head>
<body>
	<div class= "container">
		<h1 class="madlibs">MadLibs</h1>

		<div class= "redbar">
			<p>Er heerst paniek.....</p>
			<p>Onkunde</p>
		</div>

		<?php
			if($check == false){
		?>
			<div class= "whitefield">
				<form action="" method="POST">
					<label for= "v1" class= "l1">Wat zou je graag willen kunnen?</label>
					<input type="text" name="v1" class= "v1" placeholder="<?php echo "$placeholderv1" ?>" value= "<?php echo "$valuev1"?>">

					<label for= "v2" class= "l2">Met welke persoon kun je goed opschieten?</label>
					<input type="text" name="v2" class= "v2" placeholder="<?php echo "$placeholderv2" ?>" value= "<?php echo "$valuev2"?>">

					<label for= "v3" class= "l3">Wat is je favoriete getal?</label>
					<input type="text" name="v3" class= "v3" placeholder="<?php echo "$placeholderv3" ?>" value= "<?php echo "$valuev3"?>">

					<label for= "v4" class= "l4">Wat heb je altijd bij je als je op vakantie gaat?</label>
					<input type="text" name="v4" class= "v4" placeholder="<?php echo "$placeholderv4" ?>" value= "<?php echo "$valuev4"?>">

					<label for= "v5" class= "l5">Wat is je beste persoonlijke eigenschap?</label>
					<input type="text" name="v5" class= "v5" placeholder="<?php echo "$placeholderv5" ?>" value= "<?php echo "$valuev5"?>">

					<label for= "v6" class= "l6">Wat is je slechste persoonlijke eigenschap?</label>
					<input type="text" name="v6" class= "v6" placeholder="<?php echo "$placeholderv6" ?>" value= "<?php echo "$valuev6"?>">

					<label for= "v7" class= "l7">Wat is het ergste dat je kan overkomen?</label>
					<input type="text" name="v7" class= "v7" placeholder="<?php echo "$placeholderv7" ?>" value= "<?php echo "$valuev7"?>">

					<button class="btn1">Verzenden</button>
				</form>
			</div>

		<?php
			} else{
		?>
			<div class= "whitefield">
				<h1 class="ond">Onkunde</h1>
				<p class= "ondtext">Er zijn veel mensen die niet kunnen <?php echo $v1 ?>. Neem nou <?php echo "$v2" ?>. 
				Zelfs met de hulp van een <?php echo "$v4"?> of zelf <?php echo "$v3"?> kan <?php "v2" ?> niet tekenen. Dat heeft niet te maken met een gebrek aan <?php echo "$v5"?>. Maar met een te veel aan <?php echo "$v6"?> leidt tot <?php echo "$v7"?> en dat is niet goed als je wilt <?php echo "$v1" ?>. helaas voor <?php echo "$v2" ?>.

				</p>
			</div>
		<?php
			}
		?>
		</div>

	<style type="text/css">
body{
	background-color: grey;
	}

.container{
	position: relative;
	width: 1000px;
	height: 700px;
	border: 2px solid black;
	margin: 0 auto;
	}

.madlibs{
	position: absolute;
	color: white;
	left: 70px;
	font-size: 75px;
	bottom: 570px;
	}

.ond{
	color: black;
	font-size: 42px;
	text-shadow: 0px 0px black;
	top: 120px;
}

.ondtext{
	position: absolute;
	color: black;
	top: 190px;
	left: 70px;
}

.redbar{
	position: absolute;
	width: 1000px;
	height: 50px;
	top: 100px;
	background-color: red;
	}

.redbar > p{
	display: inline-block;
	color: white;
	padding-left: 30px;
	}

.whitefield{
	background-color: white;
	width: 1000px;
	height: 525px;
	margin-top: 100px;
	}

.v1{
    position: absolute;
    top: 162px;
    left: 220px;
    width: 100px;
    height: 10px;
}

.v2{
	position: absolute;
    margin-top: 100px;
    left: 290px;
    width: 100px;
    height: 10px;
}

.v3{
	position: absolute;
    margin-top: 140px;
    left: 170px;
    width: 100px;
    height: 10px;
}

.v4{
	position: absolute;
    margin-top: 180px;
    left: 300px;
    width: 100px;
    height: 10px;
}

.v5{
	position: absolute;
    margin-top: 220px;
    left: 270px;
    width: 100px;
    height: 10px;
}

.v6{
	position: absolute;
    margin-top: 255px;
    left: 280px;
    width: 100px;
    height: 10px;
}

.v7{
	position: absolute;
    margin-top: 290px;
    left: 270px;
    width: 100px;
    height: 10px;
}

.l1{
    position: absolute;
    top: 160px;
}

.l2{
    position: absolute;
    top: 198px;
}

.l3{
    position: absolute;
    top: 238px;
}

.l4{
    position: absolute;
    top: 278px;
}

.l5{
    position: absolute;
    top: 318px;
}

.l6{
    position: absolute;
    top: 352px;
}

.l7{
    position: absolute;
    top: 388px;
}

.btn1{
	position: absolute;
	top: 430px;
}

	</style>
</body>
</html>