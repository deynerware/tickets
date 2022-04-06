<div class="row">
    <!-- assing ticket -->
    <div class="col-lg-4">
        <div class="card mt-2">
            <h5 class="card-header">Asignar boletas</h5>
            <div class="card-body">
                <form action="index.php?controller=Assignment&action=store" method="POST">
                    <div class="form-group mb-3">
                        <label for="">Cantidad de boletas:</label>
                        <input
                            type="number"
                            class="form-control"
                            placeholder="1"
                            name="number"
                            min="1"
                            max="<?php echo $ticketsAvailable ?>">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Comprador:</label>
                        <select
                            class="form-select"
                            aria-label="Default select example"
                            name="buyer_id">
                            <option selected>Seleccionar</option>
                            <?php while($buyer = $buyers->fetch()) { ?>
                                <option value="<?php echo $buyer['id'] ?>">
                                    <?php echo $buyer['first_name'].' '. $buyer['last_name'] ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>
                    <button class="btn btn-primary" type="submit">Enviar</button>
                </form>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="card mt-2">
            <h5 class="card-header text-center">Boletas Asignadas</h5>
            <div class="card-body">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th scope="col">Comprador</th>
                            <th scope="col">Boletas Asignadas</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($assignment = $assignments->fetch()) { ?>
                            <tr>
                                <td><?php echo $assignment['first_name'] . ' ' . $assignment['last_name']?></td>
                                <td><?php echo $assignment['number']?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- assign ticket -->

    <!-- tickets available -->
    <div class="col-lg-3">
        <div class="card mt-2">
            <h5 class="card-header">Boletas Disponibles</h5>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Cantidad</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $ticketsAvailable; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- tickets available -->
</div>
