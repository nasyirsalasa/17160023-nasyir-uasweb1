<div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Form Pengisian Data Mahasiswa</h4>
                                <h6 class="card-subtitle">Universitas Suka Ceria</h6>
                                <?php echo form_open('welcome/output');?>
                                <form class="form">
                                    <div class="form-group m-t-40 row">
                                        <label for="example-text-input" class="col-2 col-form-label" name="nama">Nama </label>
                                        <div class="col-10">
                                            <input class="form-control" type="text" value="" name="nama" id="example-text-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-2 col-form-label" name="kelas">Kelas</label>
                                        <div class="col-10">
                                            <input class="form-control" type="text" value="" id="example-search-input">
                                        </div>
                                    </div>
                                    
                                  
                                    <div class="form-group row">
                                        <label for="example-number-input" class="col-2 col-form-label" name="usia">Usia</label>
                                        <div class="col-10">
                                            <input class="form-control" type="number" value="42" id="example-number-input">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="example-date-input" class="col-2 col-form-label" name="date">Date</label>
                                        <div class="col-10">
                                            <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
                                        </div>
                                    </div>
                                   
                                    
                                    <div class="form-group row">
                                        <label for="example-month-input" class="col-2 col-form-label" name="smester">Smester</label>
                                        <div class="col-10">
                                            <select class="custom-select col-12" id="inlineFormCustomSelect">
                                                <option selected="Smester">smester</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <button class="btn btn-outline-info btn-md" name="kirim" type="Submit" value="kirim" method="POST">Submit</button> 
                                </form>
                            </div>
                        </div>
                    </div>
                </div>