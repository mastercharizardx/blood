<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
  margin-bottom: 5px;
  margin-top: 5px;
}
 
input[type=number], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
  margin-bottom: 5px;
  margin-top: 5px;
}
input[type=tel]{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
  background-repeat: no-repeat;
  position: relative;
  outline: none;
  margin-bottom: 5px;
  margin-top: 5px;
}
   #lastDonated{
     
  position: relative;
  margin-right: auto;
  margin-left: auto;
  background-repeat: no-repeat;
  outline: none;
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
  margin-bottom: 5px;
  margin-top: 5px;

    }

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

 .regBtn {
      color:#ffffff;
      background-color: #ffefd5;
      color: black;
      padding: 16px 20px;
      margin: 8px 0;
      border: 2px solid #9a1115;
	  border-radius: 30px;
      cursor: pointer;
      width: 40%;
      margin-left: 30%;
      font-size:13pt;
      outline: none;

    }

    .regBtn:hover {
      color:#9a1115;
      background-color: #ffffff;
      border: 2px solid #9a1115;
	  border-radius: 30px;;
      opacity:1;
      font-size:13pt;
      outline: none;
    }

.container {
  border-radius: 5px;
  background-color: #9a1115;
  padding: 20px;
  align:center
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>

<h2 align="center"> Doner's Registration Form</h2>

<div class="container">
  <form method="POST" action="register.php">
    <div class="row">
      <div class="col-25">
        <label for="name"><b>Name</b></label>
      </div>
      <div class="col-75">
        <input type="text" id="name" name="name" required placeholder="Your name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="age"><b>Age</b></label>
      </div>
      <div class="col-75">
        <input type="number" id="age" name="age" min="18" max="80" required placeholder="Your age..">
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="weight"><b>Weight</b></label>
      </div>
      <div class="col-75">
        <input type="number" id="weight" name="weight" min="0" max="200" required placeholder="Your weight..">
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="height"><b>Height</b></label>
      </div>
      <div class="col-75">
        <input type="number" id="height" name="height" required placeholder="Your height..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="blood_group"><b>Blood Group<b></label>
      </div>
      <div class="col-75">
        <select id="bloodGroup" name="blood_group" >
              <option value="A+">A+</option>
              <option value="A-">A-</option>
              <option value="B+">B+</option>
              <option value="B-">B-</option>
              <option value="AB+">AB+</option>
              <option value="AB-">AB-</option>
              <option value="O+">O+</option>
              <option value="O-">O-</option>
              <option value="Others">Others</option>
        </select>
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="telephone"><b>Contact Number</b></label>
      </div>
      <div class="col-75">
        <input type="tel" id="contactNumber" name="telephone" pattern="[0-9]{10}"  required  placeholder="Your contact number..">
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="zone"><b>Area</b></label>
      </div>
      <div class="col-75">
        <input type="text" id="contactAddress" name="zone"  required placeholder="Your location..">
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="last_donated"><b>Last Blood Donated</b></label>
      </div>
      <div class="col-75">
        <input type="text" id="lastDonated" name="last_donated" onfocus="(this.type='date')" placeholder="Last blood donated date..">
      </div>
    </div>
    <div class="row">
      <button type="submit" class="regBtn"><b>Submit<b></button>
    </div>
  </form>
</div>

</body>
</html>
