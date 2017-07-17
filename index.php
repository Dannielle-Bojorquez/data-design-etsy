<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>data-design-etsy</title>
	</head>
	<body>
	<p>
		<h1>Persona and Demographics</h1>
		<img src="epic/image/jen.jpg" alt="jen"/>
		<p>Jen is the an eutrapenur. Who makes custom furniture for Tiny House Living. She likes to build things with her
			own hands that are made to her customer's needs. She likes that her products are personal and not products that
			are mass produced and pushed out by the thousands. She loves the customization of every new piece that she makes.
			Her own form of art work that others may enjoy.</p>
	<ul>
		<li>Name: Jen Watson</li>
		<li>Age:32</li>
		<li>Work: custom furniture</li>
		<li>Family: Single</li>
		<li>Location: The world</li>
		<li>Character: The Builder</li>
	</ul>
		<h2>User Case</h2>
		<p>Jen's goal is to put her work out there for purchase</p>
		<h2>Interaction Flow</h2>
			<ol>
			<li>Jen opens her web browser</li>
			<li>clicks sign in button</li>
			<li>enters login info</li>
			<li>submits for login</li>
			<li>click add new listing</li>
			<li>add a picture of her latest creation</li>
			<li>add a title</li>
			<li>put in a description</li>
			<li>who made it</li>
			<li>what it is</li>
			<li>when it was made</li>
			<li>chose a category</li>
			<li>pick a renewal option</li>
			<li>list tags related to your item</li>
			<li>list material in your item</li>
			<li>list price and inventory</li>
			<li>variations</li>
			<li>shipping options</li>
			<li>preview the post</li>
			<li>submits post</li>
		</ol>
		<h2>Conceptual Model</h2>
		<ul>
			<li>ProfileId</li>
			<li>ProfileActivationToken</li>
			<li>ProfileHandle</li>
			<li>ProfileEmail</li>
			<li>Profilehash</li>
			<li>ProfilePhone</li>
			<li>Profilesalt</li>
		</ul>
		<h3>Item Submission</h3>
		<ul>
			<li>Account Id</li>
			<li>product photo</li>
			<li>product description</li>
			<li>date of post</li>
		</ul>
		<h2>Relations</h2>
		<ul>
			<li>multiple users can comment on multiple items</li>
			<li>multiple users can order multiple items</li>
			<li>multiple users can chose multiple ways to pay</li>
		</ul>
		</body>
</html>