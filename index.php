<!DOCTYPE html>
<html>
	<head>
		<title>data-design-etsy</title>
	</head>
	<body>
	<p>
		<h1>Persona and Demographics</h1>
		<img src="epic/image/jen.jpg"/>
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
		<h2>user case</h2>
		<p>Jen's goal is to put her work out there for purchase</p>
		<h3>Interaction Flow</h3>
			<ol>
			<li>Jen opens her web browser</li>
			<li>types in the web address</li>
			<li>clicks sign in button</li>
			<li>enters login info</li>
			<li>loads a picture of her latest creation</li>
			<li>puts in a discription and price</li>
			<li>reviews the post</li>
			<li>submits post</li>
		</ol>
		<h4>Conceptual Model</h4>
		<ul>
			<li>ProfileId</li>
			<li>Profile Activation Token</li>
			<li>Profile Handle</li>
			<li>Profile Email</li>
			<li>Profile hash</li>
			<li>Profile Phone</li>
			<li>Profile salt</li>
		</ul>
		<h5>Item Submission</h5>
		<ul>
			<li>Account Id</li>
			<li>product photo</li>
			<li>product description</li>
			<li>date of post</li>
		</ul>
		<h6>purchase</h6>
		<ul>
			<li>quantity</li>
			<li>payment source</li>
			<li>payment information</li>
			<li>reveiw of perchase</li>
			<li>payment submission</li>
			<li>confirmation number</li>
		</ul>
		<h6>Relations</h6>
		<ul>
			<li>multiple users can comment on multiple items</li>
			<li>multiple users can order multiple items</li>
			<li>multiple users can chose multiple ways to pay</li>
		</ul>
		</body>
</html>