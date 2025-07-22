<!-- PUBLISH Sidebar Container Start -->
<div class="sidebar">
	<div class="widget widget-search">
		<form action="<?php echo BASE_URL.URL_SEARCH; ?>" method="post">
			<input type="text" name="search_string" placeholder="<?php echo SEARCH; ?>">
			<button type="submit"><i class="fa fa-search"></i></button>
		</form>
	</div>
	<div class="widget">
		<?php
		$statement = $pdo->prepare("SELECT * FROM tbl_settings WHERE id=1");
		$statement->execute();
		$result = $statement->fetchAll(PDO::FETCH_ASSOC);							
		foreach ($result as $row) {
			$total_recent_publish_papers_sidebar = $row['total_recent_publish_papers_sidebar'];
			$total_popular_publish_papers_sidebar = $row['total_popular_publish_papers_sidebar'];
		}
		?>
		<h4><?php echo CATEGORIES; ?></h4>
		<ul>
			<?php
			$statement = $pdo->prepare("SELECT * FROM tbl_category ORDER BY category_name ASC");
			$statement->execute();
			$result = $statement->fetchAll(PDO::FETCH_ASSOC);							
			foreach ($result as $row) {
				?>
				<li><a href="<?php echo BASE_URL.URL_CATEGORY.$row['category_slug']; ?>"><?php echo $row['category_name']; ?></a></li>
				<?php
			}
			?>
		</ul>
	</div>
	<div class="widget">
		<h4>Latest Published Papers</h4>
		<ul>
			<?php
			$i=0;
			$statement = $pdo->prepare("SELECT * FROM tbl_publish_papers ORDER BY id DESC");
			$statement->execute();
			$result = $statement->fetchAll(PDO::FETCH_ASSOC);							
			foreach ($result as $row) {
				$i++;
				if($i>$total_recent_publish_papers_sidebar) {break;}
				?>
				<li><a href="<?php echo BASE_URL.URL_PUBLISH_PAPERS.$row['slug']; ?>"><?php echo $row['title']; ?></a></li>
				<?php
			}
			?>
		</ul>
	</div>
	<div class="widget">
		<h4>Popular Published Papers</h4>
		<ul>
			<?php
			$i=0;
			$statement = $pdo->prepare("SELECT * FROM tbl_publish_papers ORDER BY total_view DESC");
			$statement->execute();
			$result = $statement->fetchAll(PDO::FETCH_ASSOC);							
			foreach ($result as $row) {
				$i++;
				if($i>$total_popular_publish_papers_sidebar) {break;}
				?>
				<li><a href="<?php echo BASE_URL.URL_PUBLISH_PAPERS.$row['slug']; ?>"><?php echo $row['title']; ?></a></li>
				<?php
			}
			?>
		</ul>
	</div>
</div>
<!-- Sidebar Container End -->