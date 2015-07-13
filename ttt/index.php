<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Mathematicians Tic Tac Toe</title>
  <meta name="description" content="Mathematics Tic Tac Toe">
  <meta name="author" content="Scott Feingold">

  <link rel="stylesheet" href="css/style.css?v=<?=md5_file("css/style.css")?>">
  <script src="js/script.js"></script>

  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>
<body>
	<div id="content" class="small">
	<div id="rightBackgroundClear"></div>
	<div id="rightBackground"></div>
		<div id="shader">
			<div id="chatContainer">
				<div id="chatHistoryContainer"><div id="chatHistory"></div></div>
				<div id="chatBox">
					<form action="#" method="post" onsubmit="return chatMsg()">
						<input type="text" id="chatText"/><input type="submit" style="display:none"/>
					</form>
				</div><!-- chat box -->
			</div><!--chat container-->
			<div id="status">
				<div class="player x">Player 1</div>
				<div class="player o">Player 2</div>
				<div id="overlay">
				</div>	
			</div><!-- status -->
		</div><!-- shader -->
		<div id="game" class="small x">
			<!-- Row 1 -->
			<div class="row">
				<div class="board">
					<div class="row">
						<div class="square"><span class="x">x</span></div>
						<div class="square h-center"><span class="o">o</span></div> 
						<div class="square"><span class="x">x</span></div> 
					</div>
					<div class="row">
						<div class="square v-center"></div> 
						<div class="square h-center v-center"></div> 
						<div class="square v-center"></div> 
					</div>
					<div class="row">
						<div class="square"></div> 
						<div class="square h-center"></div> 
						<div class="square"></div> 
					</div>
				</div> 
				<div class="board h-center">
					<div class="row">
						<div class="square"></div>
						<div class="square h-center"></div> 
						<div class="square"></div> 
					</div>
					<div class="row">
						<div class="square v-center"></div> 
						<div class="square h-center v-center"></div> 
						<div class="square v-center"></div> 
					</div>
					<div class="row">
						<div class="square"></div> 
						<div class="square h-center"></div> 
						<div class="square"></div> 
					</div>
				</div> 
				<div class="board">
					<div class="row">
						<div class="square"></div>
						<div class="square h-center"></div> 
						<div class="square"></div> 
					</div>
					<div class="row">
						<div class="square v-center"></div> 
						<div class="square h-center v-center"></div> 
						<div class="square v-center"></div> 
					</div>
					<div class="row">
						<div class="square"></div> 
						<div class="square h-center"></div> 
						<div class="square"></div> 
					</div>
				</div> 
			</div>
			<!-- Row 2 -->
			<div class="row">
				<div class="board v-center">
					<div class="row">
						<div class="square">t</div>
						<div class="square h-center">i</div> 
						<div class="square">c</div> 
					</div>
					<div class="row">
						<div class="square v-center"></div> 
						<div class="square h-center v-center"></div> 
						<div class="square v-center"></div> 
					</div>
					<div class="row">
						<div class="square"></div> 
						<div class="square h-center"></div> 
						<div class="square"></div> 
					</div>
				</div> 
				<div class="board h-center v-center">
					<div class="row">
						<div class="square"></div>
						<div class="square h-center"></div> 
						<div class="square"></div> 
					</div>
					<div class="row">
						<div class="square v-center">t</div> 
						<div class="square h-center v-center">a</div> 
						<div class="square v-center">c</div> 
					</div>
					<div class="row">
						<div class="square"></div> 
						<div class="square h-center"></div> 
						<div class="square"></div> 
					</div>
				</div> 
				<div class="board v-center">
					<div class="row">
						<div class="square"></div>
						<div class="square h-center"></div> 
						<div class="square"></div> 
					</div>
					<div class="row">
						<div class="square v-center"></div> 
						<div class="square h-center v-center"></div> 
						<div class="square v-center"></div> 
					</div>
					<div class="row">
						<div class="square">t</div> 
						<div class="square h-center">o</div> 
						<div class="square">e</div> 
					</div>
				</div> 
			</div>
			<!-- Row 3 -->
			<div class="row">
				<div class="board">
					<div class="row">
						<div class="square"></div>
						<div class="square h-center"></div> 
						<div class="square"></div> 
					</div>
					<div class="row">
						<div class="square v-center"></div> 
						<div class="square h-center v-center"></div> 
						<div class="square v-center"></div> 
					</div>
					<div class="row">
						<div class="square"></div> 
						<div class="square h-center"></div> 
						<div class="square"></div> 
					</div>
				</div> 
				<div class="board h-center">
					<div class="row">
						<div class="square"></div>
						<div class="square h-center"></div> 
						<div class="square"></div> 
					</div>
					<div class="row">
						<div class="square v-center"></div> 
						<div class="square h-center v-center"></div> 
						<div class="square v-center"></div> 
					</div>
					<div class="row">
						<div class="square"></div> 
						<div class="square h-center"></div> 
						<div class="square"></div> 
					</div>
				</div> 
				<div class="board">
					<div class="row">
						<div class="square"></div>
						<div class="square h-center"></div> 
						<div class="square"></div> 
					</div>
					<div class="row">
						<div class="square v-center"></div> 
						<div class="square h-center v-center"></div> 
						<div class="square v-center"></div> 
					</div>
					<div class="row">
						<div class="square"><span class="o">o</span></div> 
						<div class="square h-center"><span class="x">x</span></div> 
						<div class="square"><span class="o">o</span></div> 
					</div>
				</div> <!-- board -->
			</div><!-- row -->
		</div><!-- game -->
	</div><!-- content -->
</body>
</html>
