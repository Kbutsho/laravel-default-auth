<!DOCTYPE html>
<html>

<head>
    <title>Signup Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
</head>
{{-- <body>
    <div class="container">
        <h1 class="my-5">স্বাগতম ওয়েবসাইটে</h1>
	<p>এই ওয়েবসাইট তৈরি করার জন্য আমি এইচটিএমএল ব্যবহার করেছি।</p>
	<img src="https://s3.envato.com/files/354340455/Group%203.jpg" alt="ছবি">
	<h2>প্রধান বিষয়বস্তু</h2>
	<p>আমরা এখানে আমাদের প্রধান বিষয়বস্তু লিখতে পারি।</p>
	<ul>
		<li>প্রথম বিষয়</li>
		<li>দ্বিতীয় বিষয়</li>
		<li>তৃতীয় বিষয়</li>
	</ul>
	<h3>সাব টাইটেল</h3>
	<p>আমরা এখানে আরো বিস্তারিত লিখতে পারি।</p>
	<table>
		<tr>
			<th>নাম</th>
			<th>বয়স</th>
			<th>ঠিকানা</th>
		</tr>
		<tr>
			<td>জনক</td>
			<td>২৫</td>
			<td>ঢাকা</td>
		</tr>
		<tr>
			<td>মনির</td>
			<td>৩০</td>
			<td>চট্টগ্রাম</td>
		</tr>
	</table> 
    <h2 class="my-5">প্রকল্প টেবিল</h2>
    <table class="table">
        <thead>
        <tr>
            <th>প্রকল্পের নাম</th>
            <th>বিবরণ</th>
            <th>শুরুর তারিখ</th>
            <th>শেষের তারিখ</th>
            <th>স্থিতি</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1</td>
            <td>প্রকল্প A</td>
            <td>প্রকল্প A-এর বিবরণ</td>
            <td><span class="badge badge-success">সম্পন্ন</span></td>
            <td>
                <button class="btn btn-primary">সম্পাদনা</button>
                <button class="btn btn-danger">মুছুন</button>
            </td>
        </tr>
        <tr>
            <td>2</td>
            <td>প্রকল্প B</td>
            <td>প্রকল্প B-এর বিবরণ</td>
            <td><span class="badge badge-warning">চলমান</span></td>
            <td>
                <button class="btn btn-primary">সম্পাদনা</button>
                <button class="btn btn-danger">মুছুন</button>
            </td>
        </tr>
        </tbody>
    </table>

      <h1>Signup</h1>
      <form>
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
        </div>
        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" class="form-control" id="password" placeholder="Enter your password" required>
        </div>
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="terms" required>
          <label class="form-check-label" for="terms">I accept the <a href="#">terms and conditions</a></label>
        </div>
        <button type="submit" class="btn btn-primary">Signup</button>
      </form>


      
    </div>
  </body> --}}

<body>
    <p>hello world</p>
 
    <p id="toggle-content">This is the content to be toggled.</p>
    <button id="toggle-btn">Hide</button>
    <script>
        $(document).ready(function() {
            $("#toggle-btn").click(function() {
                $("#toggle-content").toggle();
                $(this).text(function(i, text) {
                    return text === "Hide" ? "Show" : "Hide";
                })
            });
        });
    </script>
</body>

</html>
