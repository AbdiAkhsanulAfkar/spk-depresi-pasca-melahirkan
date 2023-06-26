<section id="hero-animated" class="hero-animated d-flex align-items-center">
    <div class="container d-flex flex-column justify-content-center align-items-center  position-relative" data-aos="zoom-out">
      <h2 class="mb-5" style="font-size: 25px;">Berikut adalah jenis - jenis depresi pasca melahirkan menurut pakar</h2>
	  <table id="example" class="table table-striped table-bordered data" style="width:100%;margin-right:100px;" >
			<thead>
				<tr>
					<th>No</th>
					<th style="text-align: center;">Gejala</th>
				</tr>
			</thead>
			<tbody>
				<?php $no = 1;
				foreach ($gejala as $d) : ?>
				<tr>
				<td><?= $no++ ?></td>
				<td><?= $d->gejala ?></td>                                    
				</tr>
				<?php endforeach; ?>
		</tbody>
	</table>
    </div>
</section>