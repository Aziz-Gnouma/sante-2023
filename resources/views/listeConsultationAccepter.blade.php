<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Consultations Acceptées</title>
</head>
<style>
		/* Les descendants de rang impair sont stylés avec une couleur     */
		tbody:nth-child(odd)  { background-color : #CED4E5; }
		/* Les descendants de rang pair sont stylés avec une autre couleur */
		tbody:nth-child(even) { background-color : #E8EBF5; }
		th { background-color : #557CBA; padding:0.7em; }
		td { padding:0.5em; }

        table {
  table-layout: fixed;
  width: 100%;
  border-collapse: collapse;
  border: 3px solid purple;
}

thead th:nth-child(1) {
  width: 30%;
}

table {
  table-layout: fixed;
  width: 100%;
  border-collapse: collapse;
  border: 3px solid purple;
}

thead th:nth-child(1) {
  width: 30%;
}

thead th:nth-child(2) {
  width: 20%;
}

thead th:nth-child(3) {
  width: 15%;
}

thead th:nth-child(4) {
  width: 35%;
}

th, td {
  padding: 20px;
}
	</style>

<body>

<div class="bg-white shadow-md rounded my-6">
    <table class="table table-hover">
        <thead class="table-dark">
            <tr>
                <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">User Name</th>
                <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">Date Consult</th>
                <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">Other Message</th>
               
        </thead>
        <tbody style="background: rgb(255,255,255);
            background: linear-gradient(0deg, rgba(255,255,255,1) 0%, rgba(218,218,218,1) 26%, rgba(192,192,198,1) 100%);">

        @foreach ($answers as $answer)
            <tr>
                <td>{{ $answer->subject }}</td>
                <td>{{ $answer->message }}</td>
                <td>{{ $answer->name }}</td>
            </tr>
        @endforeach

        </tbody>
    </table>  
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
