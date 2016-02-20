@extends('master')
@section('title', 'Medical Personnel Register')

@section('content')

<style>
tr{
text-align: right;
}
td{
padding-left: 10px;
}

h2 {
	text-transform: uppercase;
	color: white;
	font-weight: 400;
	letter-spacing: 1px;
	font-size: 1.6em;
	line-height: 2.8em;
}

a {
	text-decoration: none;
	color: #666;
}

a:hover {
	color: #aeaeae;
}

p.small {
	font-size: 0.9em;
	margin: 20px 0 0;
}


/* Layout */
.container {
	margin: 0;
}

.top {
	margin: 0;
	padding: 0;
	width: 100%;
}

.login-box {
	background-color: white;
	max-width: 600px;
	margin: 0 auto;
	position: relative;
	top: 50px;
	padding-bottom: 30px;
	border-radius: 5px;
	box-shadow: 0 0px 3px rgba(0,0,0,0.4);
	text-align: center;
}

.login-box .box-header {
	background-color: #665851;
	margin-top: 0;
	border-radius: 5px 5px 0 0;
}

.login-box label {
	font-weight: 700;
	font-size: 1em;
	color: #888;
	letter-spacing: 1px;
	text-transform: uppercase;
	line-height: 2em;
}

.login-box input {
	margin-top: 10px;
	margin-bottom: 20px;
	padding: 8px;
	border: 1px solid #ccc;
	border-radius: 2px;
	font-size: 1em;
	color: #888;
	width: 20em;
}

.login-box input:focus {
	outline: none;
	border-color: #665851;
	transition: 0.5s;
	color: #665851;
}

.login-box button {
	margin-top: 0px;
	border: 0;
	border-radius: 2px;
	color: white;
	padding: 12px;
	text-transform: uppercase;
	font-weight: 400;
	font-size: 0.9em;
	letter-spacing: 1px;
	background-color: #665851;
	cursor:pointer;
	outline: none;
}

.login-box button:hover {
	opacity: 0.7;
	transition: 0.5s;
}

.login-box button:hover {
	opacity: 0.7;
	transition: 0.5s;
}

.selected {
	color: #665851!important;
	transition: 0.5s;
}

</style>

		<div class="login-box">
			<div class="box-header">
				<h2>Medical Personnel Register</h2>
			</div>
			<table>
				<tr>
					<td>
						<label for="name">Name</label>
					</td>
					<td>
						<input type="text" id="name">	
					</td>
				</tr>
				<tr>
					<td>
						<label for="mobile">Mobile Number</label>
					</td>
					<td>
						<input type="text" id="mobile">	
					</td>
				</tr>
				<tr>
					<td>
						<label for="address">Address</label>
					</td>
					<td>
						<input type="text" id="address">	
					</td>
				</tr>
				<tr>
					<td>
						<label for="password">Password</label>
					</td>
					<td>
						<input type="password" id="password">
					</td>
				</tr>
				<tr>
					<td>
						<label for="password">Confirm Password</label>
					</td>
					<td>
						<input type="password" id="password">
					</td>
				</tr>
			</table>	
			<br/>
			<button type="submit">Register</button>
		</div>
	

@endsection
