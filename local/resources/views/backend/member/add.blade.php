                                    @foreach($users as $k=>$v)
                                          <tr>
                                             
                                              <td>{{$k}}</td>
                                              <td>{{$v->name}}</td>
                                              <td>
                                                 {{$v->email}}
                                              </td>
                                              <td>{{$v->level}}</td>
                                              
                                              <td>
                                                 <button data="{{$v->id}}"class="btn btn-danger delete"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                                                                               
                                                 <button class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i></button> 
                                              </td>
                                          </tr>
                                        @endforeach