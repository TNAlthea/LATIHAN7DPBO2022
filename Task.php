<?php 

class Task extends DB{
	
	// Mengambil data
	function getTask(){
		// Query mysql select data ke tb_to_do
		$query = "SELECT * FROM tb_to_do";

		// Mengeksekusi query
		return $this->execute($query);
	}
	
	// Menambah data
	function addTask()
		{
			//mengambil value dari kolom tabel form
			$name = $_POST['tname'];
			$deadline = $_POST['tdeadline'];
			$detail = $_POST['tdetails'];
			$subject = $_POST['tsubject'];
			$prio = $_POST['tpriority'];

			//query insert SQL 
			$query = "INSERT INTO tb_to_do (name_td, details_td, subject_td, priority_td, deadline_td, status_td) 
						VALUES ('$name', '$detail', '$subject', '$prio', '$deadline', 'Belum')";

			return $this->execute($query);
		}

	// Menghapus data
	function deleteTask(){
		//memuat key untuk menentukan record yang diubah
		$key = $_GET['id_hapus'];
		//query insert SQL 
		$query = "DELETE FROM tb_to_do 
		WHERE id = $key";

		return $this->execute($query);
	}

	// Memberi keterangan selesai
	function completeTask(){
		//memuat key untuk menentukan record yang diubah
		$key = $_GET['id_status'];
		//UPDATE SQL
		$query = "UPDATE tb_to_do
		SET status_td = 'Sudah'
		WHERE id = $key";

		return $this->execute($query);
	}

	function ascendingSort(){
		//memuat key untuk menentukan atribut yang diurutkan
		$key = $_GET['mode'];
		//SORT
		if ($key == 'sub'){
			$query = "SELECT * FROM tb_to_do ORDER BY subject_td ASC";
		} else if ($key == 'prio') {
			$query = "SELECT * FROM tb_to_do ORDER BY priority_td ASC";
		} else if ($key == 'DL'){
			$query = "SELECT * FROM tb_to_do ORDER BY deadline_td ASC";
		} else if ($key == 'stat'){
			$query = "SELECT * FROM tb_to_do ORDER BY status_td ASC";
		} else {
			$query = "SELECT * FROM tb_to_do ORDER BY name_td ASC";
		}

		return $this->execute($query);
	}
}	


?>