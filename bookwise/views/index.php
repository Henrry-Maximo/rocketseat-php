<form class="flex gap-4">
  <input
    type="text"
    class="bg-white border border-purple-200 hover:border-purple-500 outline-0 text-sm rounded-md flex-grow px-2 py-2 shadow-sm"
    placeholder="Digite aqui..."
    name="pesquisar" />
  <button type="submit" class="bg-purple-200 hover:bg-purple-600 w-12 rounded-md cursor-pointer outline-none hover:text-white"><i class="ph ph-magnifying-glass"></i></button>
</form>

<section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
  <?php foreach ($booksDatabaseOnMemory as $book): ?>
    <div class="flex flex-col border border-gray-200 rounded-sm py-4 px-2 mx-auto text-center bg-gray-50 hover:bg-purple-50 hover:border-purple-300 hover:shadow-sm">
      <div class="grid grid-cols-2 items-center justify-items-center">
        <img
          src="<?= $book['image'] ?>"
          class="w-1/2 rounded-sm border border-purple-300"
          alt="cover book" />
        <div>
          <a href="./mybooks.php?id=<?= $book['id'] ?>" class="font-semibold hover:text-violet-600 hover:underline"><?= $book['title'] ?></a>

          <div>
            <span class="text-xs italic"><?= $book['author'] ?></span>

            <div class="flex flex-col gap-2">
              <div>
                <span class="ph-thin ph-star ph-fill" />
                <span class="ph-thin ph-star" />
                <span class="ph-thin ph-star" />
                <span class="ph-thin ph-star" />
                <span class="ph-thin ph-star" />
              </div>

              <span class="text-xs">(<?= $book['score'] ?> Avaliações)</span>
            </div>
          </div>
        </div>
      </div>

      <p class="mt-4 text-sm"><?= $book['description'] ?></p>
    </div>
  <?php endforeach; ?>
</section>