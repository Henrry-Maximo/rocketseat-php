<section>
  <div>
    <?= $firstBook['title'] ?>
    <img class="w-1/3" src="#" alt="">

    <div>
      <h1><span></span><?= $firstBook['title'] ?></h1>
      <p><?= $firstBook['description'] ?></p>

      <div>
        <span class="ph-thin ph-star ph-fill" />
        <span>3 avaliações</span>
      </div>
    </div>
  </div>

  <aside>
    <div>
      <span>Como estamos?</span>
      <input type="text" placeholder="Lendo" />
    </div>

    <div>
      <span>Minha avaliação</span>
      <input type="text" placeholder="Lendo" />
    </div>

    <div>
      <span class="ph-thin ph-star ph-fill" />
      <button type="button">Salvar</button>
    </div>
  </aside>
</section>