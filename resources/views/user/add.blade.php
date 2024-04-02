@extends('template')

@section('title', 'Início')
@section('page-name', 'Usuário')

@section('content')
    <div class="card mb-4">
        <div class="card-body">
            <h6 class="card-title mb-4">Controle de Usuário</h6>
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" value="Adek Kembar">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Username</label>
                        <input type="text" class="form-control" value="adek-kembar">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="text" class="form-control" value="wtaffe3@addthis.com">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Date of Birth</label>
                        <div class="d-flex gap-3">
                            <select class="form-select">
                                <option>Day</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                                <option>11</option>
                                <option>12</option>
                                <option>13</option>
                                <option>14</option>
                                <option>15</option>
                                <option>16</option>
                                <option>17</option>
                                <option>18</option>
                                <option>19</option>
                                <option selected="">20</option>
                                <option>21</option>
                                <option>22</option>
                                <option>23</option>
                                <option>24</option>
                                <option>25</option>
                                <option>26</option>
                                <option>27</option>
                                <option>28</option>
                                <option>29</option>
                                <option>30</option>
                            </select>
                            <select class="form-select">
                                <option>Month</option>
                                <option selected="">Jan</option>
                                <option>Feb</option>
                                <option>Mar</option>
                                <option>Apr</option>
                                <option>May</option>
                                <option>Jun</option>
                                <option>Jul</option>
                                <option>Aug</option>
                                <option>Sep</option>
                                <option>Oct</option>
                                <option>Nov</option>
                                <option>Dec</option>
                            </select>
                            <select class="form-select">
                                <option>Year</option>
                                <option>2018</option>
                                <option>2017</option>
                                <option>2016</option>
                                <option>2015</option>
                                <option>2014</option>
                                <option>2013</option>
                                <option>2012</option>
                                <option>2011</option>
                                <option>2010</option>
                                <option>2009</option>
                                <option>2008</option>
                                <option>2007</option>
                                <option>2006</option>
                                <option>2005</option>
                                <option>2004</option>
                                <option>2003</option>
                                <option>2002</option>
                                <option>2001</option>
                                <option>2000</option>
                                <option>1999</option>
                                <option>1998</option>
                                <option>1997</option>
                                <option>1996</option>
                                <option>1995</option>
                                <option>1994</option>
                                <option>1993</option>
                                <option>1992</option>
                                <option>1991</option>
                                <option>1990</option>
                                <option selected="">1989</option>
                                <option>1988</option>
                                <option>1987</option>
                                <option>1986</option>
                                <option>1985</option>
                                <option>1984</option>
                                <option>1983</option>
                                <option>1982</option>
                                <option>1981</option>
                                <option>1980</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Gender</label>
                        <div>
                            <div class="form-check form-check-inline">
                                <input type="radio" id="inlineRadio1" name="inlineRadio"
                                       class="form-check-input">
                                <label class="form-check-label" for="inlineRadio1">Male</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" id="inlineRadio2" name="inlineRadio"
                                       class="form-check-input">
                                <label class="form-check-label"
                                       for="inlineRadio2">Female</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" id="inlineRadio3" name="inlineRadio"
                                       class="form-check-input">
                                <label class="form-check-label" for="inlineRadio3">Other</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Role</label>
                        <select class="form-select">
                            <option value="">All</option>
                            <option value="">Admin</option>
                            <option value="">User</option>
                            <option value="" selected>Staff</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Status</label>
                        <select class="form-select">
                            <option value="">All</option>
                            <option value="" selected>Active</option>
                            <option value="">Blocked</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Department</label>
                        <select class="form-select">
                            <option value="">All</option>
                            <option value="">Sales</option>
                            <option value="" selected>Development</option>
                            <option value="">Management</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
