<style>
/* Widget container */
.widget {
    padding: 20px;
    background-color: #f8f9fa;
    border: 1px solid #ddd;
    border-radius: 5px;
    margin-bottom: 20px;
}

.widget p {
    font-size: 1.2em;
    color: #007bff;
    margin-bottom: 20px;
}

/* Tab container */
.tab-container {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

/* Individual post styling */
.spost {
    display: flex;
    align-items: center;
    border-bottom: 1px solid #eee;
    padding-bottom: 15px;
    transition: background-color 0.3s ease;
}

.spost:last-child {
    border-bottom: none;
}

.spost:hover {
    background-color: #f1f1f1;
}

.entry-image {
    margin-right: 15px;
    flex-shrink: 0;
}

.e-img img {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.e-img:hover img {
    transform: scale(1.1);
}

.entry-c {
    flex-grow: 1;
}

.entry-title h4 {
    font-size: 1em;
    color: #333;
}

.entry-title h4 a {
    text-decoration: none;
    color: #333;
    transition: color 0.3s ease;
}

.entry-title h4 a:hover {
    color: #007bff;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .spost {
        flex-direction: column;
        align-items: flex-start;
    }

    .entry-image {
        margin-bottom: 10px;
    }
}
.spost .entry-title a {
    margin: 0;
    font-size: 14px;
    color: #333;
    font-weight: 500;
}
</style>

<div class="widget">
	<p>Bài viết mới nhất</p>
	<div class="tab-container ">
		<?php  
		$posts = $this->Mcontent->content_get_news(5);
		foreach ($posts as $value) :?>
			<div class="spost clearfix">
				<div class="entry-image e-img">
					<a href="tin-tuc/<?php echo $value['alias'] ?>" class="nobg a-circle">
						<img class="img-circle-custom" src="public/images/posts/<?php echo $value['img']; ?>" alt="organica giảm đến 30%">
					</a>
				</div>
				<div class="entry-c">
					<div class="entry-title e-title">
						<h4>
							<a href="tin-tuc/<?php echo $value['alias'] ?>"><?php echo $value['title']; ?></a>
						</h4>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</div>