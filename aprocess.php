<?php
require "connection.php";

$q = Database::search("SELECT * FROM `question` ORDER BY RAND() LIMIT 1");

$q_num = $q->num_rows;

// while($q_num>0){
//     $q_data=$q->fetch_assoc();

// }

for ($i = 0; $i < $q_num; $i++) {
    $q_data = $q->fetch_assoc();
?>
    <h1 class="text-danger fw-bold alert alert-dark mt-3"><?php echo $q_data["question"]; ?>
    </h1>
    <div class="form-floating mb-3 d-none" id="div2">
        <textarea class="form-control fs-4" id="floatingTextarea2Disabled" style="height: 200px" disabled><?php echo $q_data["answer"]; ?>
                        </textarea>
        <label for="floatingTextarea2Disabled">Answer</label>
    </div>

    <div class="row">
        <div class="col-10 m-3">
            <div class="row">
                <button class="btn btn-primary col-3" onclick="answer();">
                    Get Answer
                </button>
                <button class="btn btn-primary col-3 ms-auto" onclick="next();">
                    Next
                </button>
            </div>
        </div>
    </div>

<?php
}




?>