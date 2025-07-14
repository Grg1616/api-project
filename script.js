document.getElementById("cat-form").addEventListener("submit", async (e) => {
  e.preventDefault();
  const breed = document.getElementById("breed").value;
  const fact = document.getElementById("fact").value;
  const image_url = document.getElementById("image_url").value;

  await fetch('../php/add.php', {
    method: 'POST',
    headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
    body: `breed=${breed}&fact=${fact}&image_url=${image_url}`
  });

  loadCats();
});

async function loadCats() {
  const res = await fetch('../php/fetch.php');
  const cats = await res.json();
  const list = document.getElementById("cat-list");
  list.innerHTML = cats.map(cat =>
    `<div class="cat">
      <img src="${cat.image_url}" alt="cat" width="150"><br>
      <strong>${cat.breed}</strong><br>
      ${cat.fact}<br>
      <button onclick="deleteCat(${cat.id})">Delete</button>
    </div>`
  ).join('');
}

async function deleteCat(id) {
  await fetch('../php/delete.php', {
    method: 'POST',
    headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
    body: `id=${id}`
  });
  loadCats();
}

window.onload = loadCats;
