<!DOCTYPE html>
<html>
<head>
	<title>Final View</title>
	<style type="text/css">
	body {
	background: rgb(109, 106, 106);
	color: #ebebeb;
	font-weight: 500;
	font-size: 1.05em;
	font-family: 'Raleway', Arial, sans-serif;
}
		.input {
	position: relative;
	z-index: 1;
	display: inline-block;
	margin: 1em;
	max-width: 350px;
	width: calc(100% - 2em);
	vertical-align: top;
}

.input__field {
	position: relative;
	display: block;
	float: right;
	padding: 0.8em;
	width: 60%;
	border: none;
	border-radius: 0;
	background: #f0f0f0;
	color: #aaa;
	font-weight: bold;
	font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
	-webkit-appearance: none; /* for box shadows to show on iOS */
}

.input__field:focus {
	outline: none;
}

.input__label {
     -moz-user-select: none;
    color: #6a7989;
    display: inline-block;
    float: right;
    font-size: 134.25%;
    font-weight: bold;
    width: 74%;
}
.input__label-content {
    display: block;
    padding-left: 10px;
    position: relative;
    width: 100%;
    padding-right: 10px;
    padding-top: 10px;
    padding-bottom: 10px;
}

.graphic {
	position: absolute;
	top: 0;
	left: 0;
	fill: none;
}

.icon {
	color: #ddd;
	font-size: 150%;
}
.input--kuro {
	max-width: 320px;
	margin-bottom: 3em;
}

.input__field--kuro {
	width: 100%;
	background: transparent;
	 color: #27202b;
	opacity: 0;
	text-align: center;
	-webkit-transition: opacity 0.3s;
	transition: opacity 0.3s;
}

.input__label--kuro {
	position: absolute;
	left: 0;
	width: 100%;
	color: #FE6486;
	pointer-events: none;
}

.input__label--kuro::before,
.input__label--kuro::after {
	content: '';
	position: absolute;
	top: 0;
	left: 0;
	width: 50%;
	height: 100%;
	border: 4px solid #ffffff;
	-webkit-transition: -webkit-transform 0.3s;
	transition: transform 0.3s;
}

.input__label--kuro::before {
	border-right: none;
}

.input__label--kuro::after {
	left: 50%;
	border-left: none;
}

.input__field--kuro:focus,
.input--filled .input__field--kuro {
	opacity: 1;
	-webkit-transition-delay: 0.3s;
	transition-delay: 0.3s;
}

.input__field--kuro:focus + .input__label--kuro::before,
.input--filled .input__label--kuro::before {
	-webkit-transform: translate3d(-10%, 0, 0);
	transform: translate3d(-10%, 0, 0);
}

.input__field--kuro:focus + .input__label--kuro::after,
.input--filled .input__label--kuro::after {
	-webkit-transform: translate3d(10%, 0, 0);
	transform: translate3d(10%, 0, 0);
}

.input__field--kuro:focus + .input__label--kuro .input__label-content--kuro,
.input--filled .input__label-content--kuro {
	-webkit-animation: anim-2 0.3s forwards;
	animation: anim-2 0.3s forwards;
}
@-webkit-keyframes anim-2 {
	50% {
		opacity: 0;
		-webkit-transform: scale3d(0.3, 0.3, 1);
		transform: scale3d(0.3, 0.3, 1);
	}
	51% {
		opacity: 0;
		-webkit-transform: translate3d(0, 3.7em, 0) scale3d(0.3, 0.3, 1);
		transform: translate3d(0, 3.7em, 0) scale3d(0.3, 0.3, 1);
	}
	100% {
		opacity: 1;
		-webkit-transform: translate3d(0, 3.7em, 0);
		transform: translate3d(0, 3.7em, 0);
	}
}

@keyframes anim-2 {
	50% {
		opacity: 0;
		-webkit-transform: scale3d(0.3, 0.3, 1);
		transform: scale3d(0.3, 0.3, 1);
	}
	51% {
		opacity: 0;
		-webkit-transform: translate3d(0, 3.7em, 0) scale3d(0.3, 0.3, 1);
		transform: translate3d(0, 3.7em, 0) scale3d(0.3, 0.3, 1);
	}
	100% {
		opacity: 1;
		-webkit-transform: translate3d(0, 3.7em, 0);
		transform: translate3d(0, 3.7em, 0);
	}
}
#main{
	text-align: center;
	position: relative;
	width: 40%;
	margin-top: 40px;
	margin-left: 430px;
}
#main .submit{
	border: none;
    padding: 16px;
    position: absolute;
  	width: 347px;
    background-color: rgb(223, 102, 89);
    color: white;
    font-size: 20px;
    left: 122px;
    top: 250px;
}
#header{
	text-align: center;
	border-bottom: 3px solid #6D6A6A;
}

</style>
</head>
<body>
<div id="main">
		<div id="header"><h1>Student Details</h1></div>
		<span class="input input--kuro">
			<input class="input__field input__field--kuro" type="text" id="input-7" />
			<label class="input__label input__label--kuro" for="input-7">
			<span class="input__label-content input__label-content--kuro">Username</span>
			</label>
		</span>
		<input type="submit" class="submit" name="submit" value="Submit">
</div>		
</body>
</html>