<!-- HEADER -->
<?php include "../app/view/layout/header.inc.php";?>
<!-- Page Header -->
	<header class="masthead jumbotron" style="background-image: url('<?=$article["post_img_url"]?>')">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-10 mx-auto">
					<div class="post-heading">
						<h1><?=$article["post_title"]?></h1>
						<span class="meta">par
							<a href="#"><?=$article["display_name"]?></a>
							<?=$article["post_date"]?></span>
					</div>
				</div>
			</div>
		</div>
	</header>
​
	<!-- Post Content -->
	<article >
		<div class="container">
			<div class="row d-flex justify-content-center">
					<h1><?=$article["post_title"]?></h1>
				<div class="col-lg-8 col-md-10 mx-auto">
					<p><?=$article["post_content"]?></p>
				</div>
			</div>
		</div>
	</article>
​
	<div>
​
		<ul class="list-group mx-auto" style="max-width: 900px;">
	<li class="list-group-item active h2">Commentaires</li>
		<?php foreach ($commentaires as $commentaire): ?>
			<li class="list-group-item list-group-item-dark d-flex flex-column small" >
				<?=$commentaire["comment_content"]?>
				<span class="badge badge-primary badge-pill align-self-end m-1 ">👤 <?=$commentaire["display_name"]?></span>
				<span class="badge badge-primary badge-pill align-self-end">📆 <?=$commentaire["comment_date"]?></span>
​
​
			</li>
        <?php endforeach;?>
		</ul>
	</div>
<!-- FOOTER -->
<?php include "../app/view/layout/footer.inc.php";?>