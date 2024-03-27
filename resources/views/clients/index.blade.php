<x-layout.mainAdmin>
    
	<div class="container mt-4">

		<table class="table table-striped">
			<thead>
				<tr>
					<th>№</th>
					<th>Mijoz</th>
					<th>Telefon</th>
					<th>Status</th>
				</tr>
			</thead>
			<tbody>
                @foreach ($client as $clien)
                    <tr>
                        <td>{{ $clien->id }}</td>
                        <td>{{ $clien->name }}</td>
                        <td>{{ $clien->tel_raqam }}</td>
                        <td>
                            <a href="" class="btn btn-primary p-1 mr-2">
                                <img src="./images/admin/wishlist.png" alt="" width="20" height="20" style="filter: invert(1); mix-blend-mode: color-dodge;">
                            </a>
                            <a href="{{ route('client.delete', ['client'=>$clien->id]) }}" class="btn btn-danger p-1 mr-2">
                                <img src="./images/admin/delete.png" alt="" width="20" height="20" style="filter: invert(1); mix-blend-mode: color-dodge;">
                            </a>
                        </td>
                    </tr>
                @endforeach
			</tbody>
		</table>
	</div>

</x-layout.mainAdmin>