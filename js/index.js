/* eslint-disable no-undef */
document.addEventListener("DOMContentLoaded", function () {
	let offset = 0;
	const postsPerPage = 5;
	document.getElementById("loadMoreFlavours").addEventListener("click", function (e) {
		const loadMoreFlavoursBtn = e.target;
		loadMoreFlavoursBtn.innerText = "Loading...";
		const flavours = new wp.api.collections.Flavours();
		flavours
			.fetch({
				data: {
					per_page: postsPerPage,
					offset,
				},
			})
			.then(function (data) {
				offset += postsPerPage;
				if (!data.length) {
					loadMoreFlavoursBtn.disabled = true;
				}
				data.forEach(function (flavor) {
					document.getElementById("insertFlavours").insertAdjacentHTML(
						"beforeend",
						getFlavorArticleDomElement({
							thumbnailUrl: flavor.thumbnail_url,
							title: flavor.title.rendered,
							excerpt: flavor.content.rendered,
						}),
					);
				});
				loadMoreFlavoursBtn.innerText = "Load More";
			})
			.catch(function () {
				alert("Oops, algo salió mal");
			});
	});
});

// wp.template('my-template') for big projects
function getFlavorArticleDomElement({ thumbnailUrl, title, excerpt }) {
	const section = 3;

	return `
		<article class="section-${section}__flavours__article insert-article-animation">
			<img class="section-${section}__flavours__article__img" src="${
				thumbnailUrl ?? `${wpData.themeUri}/assets/jpg/pig.jpg`
			}" alt="flavor-${title}" width="37px" height="37px">
			<h5 class="section-${section}__flavours__article__h5">${title}</h5>
			<p class="section-${section}__flavours__article__p">${excerpt}</p>
			<a class="section-${section}__flavours__article__a" href="#">
				details
				<svg xmlns="http://www.w3.org/2000/svg" width="17" height="7" viewBox="0 0 17 7" fill="none">
					<path d="M16.6112 3.78436L11.6112 0.897611V6.67111L16.6112 3.78436ZM0.5 4.28436H12.1112V3.28436H0.5V4.28436Z" fill="currentColor"/>
				</svg>
			</a>
		</article>
	`;
}
