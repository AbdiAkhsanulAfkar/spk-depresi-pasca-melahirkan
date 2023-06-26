<section id="hero-animated" class="hero-animated d-flex align-items-center">
    <div class="container d-flex flex-column justify-content-center align-items-center  position-relative" data-aos="zoom-out">
      <h2 class="mb-5" style="font-size: 25px;">Berikut adalah jenis - jenis depresi pasca melahirkan menurut pakar</h2>
	  <table class="table table-striped table-bordered data">
		<thead>
			<tr>
				<th>No</th>
				<th>Jenis Depresi</th>
				<th style="text-align: center;">Detail</th>
				<th>Solusi</th>
			</tr>
		</thead>
		<tbody>
			<?php $no = 1;
			foreach ($depresi as $d) : ?>
			<tr>
			<td><?= $no++ ?></td>
			<td><?= $d->nama_depresi ?></td>
			<td><?= $d->detail ?></td>
			<td><?= $d->solusi ?></td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>

    </div>
	
</section>