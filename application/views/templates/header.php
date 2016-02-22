<html>
  <head>
    <title>Guestbook</title>

    <style>

    	body {
    		font-family: arial;
    	}

    	h1 {
    		background-color: #c2eca2;
    		padding-left: 5px;
    	}

    	.form {
    		margin: 0 auto;
    		width: 30%;
    	}

    	input, textarea {
    		border: 1px solid #a2c2ec;
    		margin-bottom: 10px;
    		width: 100%;
    	}

    	input[type='submit'] {
    		background-color: #a2c2ec;
    		padding: 2px;
    	}

    	input[type='submit']:hover {
    		border: 1px solid black;
    	}

    	.posts {
    		background-color: #c2eca2;
    		display: flex;
    		flex-wrap: wrap;
    		justify-content: center;
    	}

    	.post {
    		background-color: #a2c2ec;
    		display: inline-block;
    		margin: 5px;
    		padding: 5px;
    	}

    	.name {
    		font-size: 1.2em;
    		font-weight: bold;
    	}

    	.comment {
    		margin: 5px;
    	}

    	.delete {
    		float: right;
    	}

    	a {
    		color: #b24c4c;
    		font-weight: bold;
				margin-right: -5px;
				margin-bottom: 5px;
    		padding: 5px;
    		text-decoration: none;
    	}

    	a:hover{
    		background-color: #b24c4c;
    		color: black;
    	}

    </style>

  </head>
  <body>

    <h1><?php echo $title; ?></h1>