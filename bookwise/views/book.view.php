<div>
  <header class="flex flex-cols justify-between py-4 px-4">
    <h1 class="text-xl underline">My Books</h1>

    <div>
      <input class="border border-purple-500" type="number" />
      <button class="border border-purple-500 text-purple-500 p-2 rounded-sm">Adicionar</button>
    </div>
  </header>

  <section class="grid grid-cols-2">
    <main class="border border-purple-500 p-4">
      <!-- <?= $firstBook['title'] ?> -->
      <img class="w-1/3" src="#" alt="">

      <div>
        <h1><span></span><?= $firstBook['title'] ?></h1>
        <p><?= $firstBook['description'] ?></p>

        <div>
          <span class="ph-thin ph-star ph-fill" />
          <span>3 avaliações</span>
        </div>
      </div>
    </main>

    <aside class="border border-purple-500 p-4">
      <div class="flex flex-rows">
        <label id="name">Como estamos?</label>
        <input id="name" type="text" placeholder="Lendo" />
      </div>

      <div>
        <label>Minha avaliação</label>
        <input type="text" placeholder="Lendo" />
      </div>

      <div>
        <span class="ph-thin ph-star ph-fill" />
        <button type="button">Salvar</button>
      </div>
    </aside>
  </section>
</div>