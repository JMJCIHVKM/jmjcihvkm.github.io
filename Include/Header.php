<header id="main-header">
	<nav class="nav-bar">
		<div class="nav-logo" style="font-size: 1.7rem; color: #ffffffff; font-weight: bold; letter-spacing: 2px;">MICHAEL MUINDE</div>
		<div class="nav-toggle" id="nav-toggle" aria-label="Open menu" tabindex="0">
			<span></span><span></span><span></span>
		</div>
		<ul class="nav-links" id="nav-links">
			<li><a href="/mike profile/index.php">Home</a></li>
			<li><a href="/mike profile/about.php">About</a></li>
			<li><a href="/mike profile/projects.php">Projects Done</a></li>
			<li><a href="/mike profile/contact.php">Contact</a></li>
		</ul>
	</nav>
</header>
<style>
	#main-header {
		width: 100vw;
		background: rgba(20, 20, 20, 0.98);
		box-shadow: 0 2px 16px #000a;
		position: sticky;
		top: 0;
		z-index: 1002;
		margin-bottom: 2.5rem;
	}
	.nav-bar {
		max-width: 1400px;
		margin: 0 auto;
		display: flex;
		align-items: center;
		justify-content: space-between;
		padding: 0.7rem 2vw;
	}
	.nav-logo {
		font-family: 'Orbitron', 'Segoe UI', Arial, sans-serif;
		text-shadow: 0 2px 8px #0ff5;
	}
	.nav-links {
		list-style: none;
		display: flex;
		gap: 2.2rem;
		margin: 0;
		padding: 0;
		align-items: center;
		transition: right 0.3s cubic-bezier(.77,0,.18,1);
	}
	.nav-links li a {
		color: #ffffff;
		font-size: 1.18rem;
		text-decoration: none;
		font-weight: bold;
		padding: 0.5rem 1.2rem;
		border-radius: 0.5rem;
		background: linear-gradient(90deg, #222 60%, #2d1a0b 100%);
		box-shadow: 0 2px 8px #0ff2;
		transition: background 0.2s, color 0.2s, box-shadow 0.2s;
		letter-spacing: 1px;
	}
	.nav-links li a:hover, .nav-links li a:focus {
		background: #0ff;
		color: #222;
		box-shadow: 0 4px 16px #0ff8;
	}
	.nav-toggle {
		display: none;
		flex-direction: column;
		justify-content: center;
		align-items: center;
		width: 38px;
		height: 38px;
		cursor: pointer;
		z-index: 1003;
	}
	.nav-toggle span {
		display: block;
		width: 28px;
		height: 4px;
		margin: 4px 0;
		background: #0ff;
		border-radius: 2px;
		transition: 0.3s;
	}
	@media (max-width: 900px) {
		.nav-links {
			position: fixed;
			top: 0;
			right: -100vw;
			height: 100vh;
			width: 70vw;
			max-width: 340px;
			background: rgba(20, 20, 20, 0.98);
			flex-direction: column;
			align-items: flex-start;
			padding: 4.5rem 2rem 2rem 2rem;
			gap: 2rem;
			box-shadow: -2px 0 16px #0ff5;
		}
		.nav-links.open {
			right: 0;
		}
		.nav-toggle {
			display: flex;
		}
	}
</style>
<script>
	// Responsive hamburger menu
	const navToggle = document.getElementById('nav-toggle');
	const navLinks = document.getElementById('nav-links');
	navToggle.addEventListener('click', () => {
		navLinks.classList.toggle('open');
		navToggle.classList.toggle('active');
	});
	navToggle.addEventListener('keypress', (e) => {
		if (e.key === 'Enter' || e.key === ' ') {
			navLinks.classList.toggle('open');
			navToggle.classList.toggle('active');
		}
	});
	// Animate hamburger icon
	navToggle.addEventListener('click', () => {
		if (navToggle.classList.contains('active')) {
			navToggle.children[0].style.transform = 'rotate(45deg) translateY(10px)';
			navToggle.children[1].style.opacity = '0';
			navToggle.children[2].style.transform = 'rotate(-45deg) translateY(-10px)';
		} else {
			navToggle.children[0].style.transform = '';
			navToggle.children[1].style.opacity = '';
			navToggle.children[2].style.transform = '';
		}
	});
</script>
