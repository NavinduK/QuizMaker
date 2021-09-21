			<nav class="navbar navbar-header navbar-light bg-primary">
				<div id="navitems" class="container-fluid">
					<div class="navbar-header">
						<h3 class="navbar-text pull-right text-white m-0">QUIZ MAKER</h3>
					</div>
					<div class="nav-list row">
						<div class="navbar-header mr-5">
							<a href="home.php" class="text-white">
								<i class="fa fa-home"> </i> Home
							</a>
						</div>
						<?php if ($_SESSION['login_user_type'] != 3) : ?>
							<?php if ($_SESSION['login_user_type'] == 1) : ?>
								<div class="navbar-header mr-5">
									<a href="faculty.php" class="text-white">
										<i class="fa fa-users"> </i> Quiz Makers
									</a>
								</div>
								<div class="navbar-header mr-5">
									<a href="student.php" class="text-white">
										<i class="fa fa-users"> </i> Students
									</a>
								</div>
							<?php endif; ?>
							<div class="navbar-header mr-5">
								<a href="quiz.php" class="text-white">
									<i class="fa fa-list"> </i> Quiz List
								</a>
							</div>
							<div class="navbar-header mr-5">
								<a href="history.php" class="text-white">
									<i class="fa fa-history"> </i> Quiz Records
								</a>
							</div>
						<?php else : ?>
							<div class="navbar-header mr-5">
								<a href="student_quiz_list.php" class="text-white">
									<i class="fa fa-history"> </i> Quiz List
								</a>
							</div>
						<?php endif; ?>
					</div>
					<div class="nav navbar-nav navbar-right">
						<a href="logout.php" class="text-dark"><?php echo $name ?> <i class="fa fa-power-off"></i></a>
					</div>
				</div>
			</nav>
			
			<script>
				$(document).ready(function() {
					var loc = window.location.href;
					loc.split('{/}')
					$('#navitems a').each(function() {
						// console.log(loc.substr(loc.lastIndexOf("/") + 1),$(this).attr('href'))
						if ($(this).attr('href') == loc.substr(loc.lastIndexOf("/") + 1)) {
							$(this).addClass('active')
						}
					})
				})
			</script>

			<script>
				$(document).ready(function() {
					var loc = window.location.href;
					loc.split('{/}')
					$('#sidebar a').each(function() {
						// console.log(loc.substr(loc.lastIndexOf("/") + 1),$(this).attr('href'))
						if ($(this).attr('href') == loc.substr(loc.lastIndexOf("/") + 1)) {
							$(this).addClass('active')
						}
					})
				})
			</script>