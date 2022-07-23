<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Booking</title>
	<style type="text/css">
		body{
		background-color:7FBCAB;
		
		}
		
		.box{
			border:2px solid #FFFFFF;
			border-radius:8px;
			margin: auto;
			width:50%;
			font-family:cursive;
			}
			
		input[type=text],input[type=date]{
			width: 50%;
			padding: 8px 8px;
			margin: 8px 52px;
			border: 1px solid #FFF0D9;
			border-radius:4px;
			box-sizing: border-box;
			font-family:cursive;
			}
		
		button{
			background-color:#26f7fd;
			font-family:cursive;;
			}
			
		select{
			width:50%;
			border-radius:8px;
			padding: 8px 8px;
			margin: 8px 52px;
			font-family:cursive;
			}
			
			
		div{
			opacity:0.7;
			}
			
		h2{
		color:#ffffff;
		}
		
	.tbl1
        {
            margin:1.5%;
            border-spacing: 10px;
        }
        td 
        {
            background-color: none;
            font-size: 18px;
            padding: 5px 10px;
        }
        a
        {
	    font-family: "Helvetica", sans-serif;
            text-decoration: none;
            color: white;
        }
		a:hover
        {
            color: red;
        }
	.logo
	{
		width:90px;
		height: 60px;
	}
		
	</style>
	</head>
	<body background="engfilm.jpg">
		<table align="right" class="tbl1">
        <tr>
            <td><b><a href="pHome.php">| Home |</a></b></td>
            <td><b><a href="latestMovie.php">| Latest Movies |</a></b></td>
            <td><b><a href="Trailers.php">| Trailers |</a></b></td>
            <td><b><a href="signup.php">| SignUp |</a></b></td>
            <td><b><a href="booking.php">| Booking |</a></b></td>
            <td><b><a href="contact.php">| Contact Us |</a></b></td>
        </tr>
    </table> 
	<img src="logo.jpg" class="logo"/>
		
		<form action="payment.php">	
		<div class="box" style="background-color:#000000; margin-top:80px;">
		
		<h2 align="center">BOOK MOVIE TICKETS</h2><br><br>
		
			<label style="color:white;padding-left:8px; margin-left:30px;" for = "date"><b>Date</b></label><br>
			<input type = "Date" placeholder="Date" name="Date" required>
		<br><br>

			<label style="color:white;padding-left:8px; margin-left:30px;" for = "Movie"><b>Movie</b></label><br>
			<select name="Movie" id = "Movie">
			<option value= "Venom">Venom </option>
			<option value= "Dunkerk">Dunkerk </option>
			<option value= "Batman Vs Superman">Batman Vs Superman </option>
			<option value= "John Wick">John Wick </option>
			<option value= "Aquaman">Aquaman </option>
			<option value= "Black Panther">Black Panther </option>
			<option value= "THOR">THOR </option>
			<option value= "Bumble Bee">Bumble Bee </option>
			<option value= "Mortal Engines">Mortal Engines </option>
			<option value= "Underworld Blood Wars">Underworld Blood Wars </option>
			</select>
		<br><br>
		
			<label style="color:white;padding-left:8px; margin-left:30px;" for = "TheaterNo"><b>Theater No</b></label><br>
			<select name="Theater No" id = "Theater No">
			<option value= "Theater 01">Theater 01 </option>
			<option value= "Theater 02">Theater 02 </option>
			<option value= "Theater 03">Theater 03 </option>
			</select>
		<br><br>
			
			<label style="color:white;padding-left:8px; margin-left:30px;" for = "seatc"><b>Seat Category</b></label><br>
			<select name="Seat Category" id = "Seat Category">
			<option value= "ODI">ODI </option>
			<option value= "Balcony">Balcony </option>
			<option value= "Box Area">Box Area </option>
			</select>
		<br><br>
			
			<label style="color:white;padding-left:8px; margin-left:30px;" for = "No of Seats"><b>No of Seats</b></label><br>
			<input type = "text" name="No of Seats" required>
		<br><br>
			
			<label style="color:white;padding-left:8px; margin-left:30px;" for = "No of Seats"><b>Time</b></label><br>
			<select name="Time" id = "time">
			<option value= "10.30AM - 12.30PM">10.30AM - 12.30PM </option>
			<option value= "1.30PM - 4.30PM">1.30PM - 4.30PM </option>
			<option value= "6.30PM - 8.30PM">6.30PM - 8.30PM </option>
			</select><br><br>
			
			<a href = "payment.php"><button style="color:white;padding:5px 30px;border-radius:10px;margin: 10px 400px;" >Next</button></a><br><br>
			
		</form>
		</div>
		
	</body>
</html>