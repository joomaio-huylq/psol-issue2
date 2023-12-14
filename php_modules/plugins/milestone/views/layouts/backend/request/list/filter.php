<form id="filter_form" class="row pe-0 pb-2" action="<?php echo $this->link_list ?>" method="POST">
    <div class="col-lg-11 col-sm-12">
        <div class="input-group input-group-navbar">
            <div class="pe-2">
                <div class="row">
                    <div class="col-auto">
                        <button data-id="" 
                            data-title="" 
                            data-status="1" 
                            data-note="" 
                            type="button" 
                            class="align-middle btn border border-1 show_data" 
                            data-bs-placement="top" 
                            data-bs-toggle="modal" 
                            data-bs-target="#exampleModalToggle">
                            <i class="fa-solid fa-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="pe-2">
                <div class="row">
                    <div class="col-auto">
                        <button id="delete_selected" data-bs-placement="top" title="Delete Selected" data-bs-toggle="tooltip" class="btn border border-1" type="button">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="pe-2">
                <?php $this->ui->field('sort');  ?>
            </div>
            <div class="pe-2">
                <?php $this->ui->field('search');  ?>
            </div>
            <div class="pe-2 select2-no-index">
                <?php $this->ui->field('filter_tags');  ?>
            </div>
            <input type="hidden" name="clear_filter" id="input_clear_filter">
            <button type='Submit' data-bs-toggle="tooltip" title="Filter" class=" align-middle btn border border-1 ms-2" type="button">
                <i class="fa-solid fa-filter"></i>
            </button>
            <button data-bs-toggle="tooltip" title="Clear Filter" id="clear_filter" class="align-middle btn border border-1 ms-2" type="button">
                <i class="fa-solid fa-filter-circle-xmark"></i>
            </button>
        </div>
    </div>
    <div class="col-lg-1 col-sm-12 text-end pe-0 pb-1 ">
        <div class="d-flex justify-content-end">
            <?php $this->ui->field('limit');  ?>
        </div>
    </div>
</form>