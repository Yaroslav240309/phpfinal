@extends('layout')

@section('title')Авторизация@endsection

@section('main_content')
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>   
  <div class="container my-3">
        <h1 class="text-center">Каталог</h1>
        <div class="col-sm-6 mx-auto">
            <form method="POST" action="/catalog">
            @csrf
                <div>
                    <a  href="/chemp"><img src="https://ntrend.ee/117165-large_default/champion-muzhskaya-panama-804786kk001.jpg" alt="" height="700px" width="650px"> <span><p>Панама Чемп     </p></span></a>990р
                </div>
                <div>
                    <a  href="/carhartt"><img src="https://elyts.ru/upload/resize_cache/iblock/5ac/630_456_0/panama-carhartt-wip-chernyy-678732-1.jpg" alt="" height="700px" width="600px"><span><p>Панама Carhartt  </p></span> </a>  1290р
                </div>
                <div>
                    <a  href="/onenine"><img src="https://ir.ozone.ru/s3/multimedia-a/wc1000/6653711350.jpg" alt="" height="700px"><span><p>Панама onenine wear</p></span> </a> 569р 
                </div>
                <div>
                    <a  href="/Young"><img src="https://ir.ozone.ru/s3/multimedia-i/wc1000/6547505478.jpg" alt="" height="700px"><span><p>Панама Young </p></span> </a>  1 266р
                </div>
                <div>
                    <a  href="/A-Store"><img src="https://ir.ozone.ru/s3/multimedia-1/wc1000/6604182397.jpg" alt="" height="700px"><span><p>Панама A-Store </p></span> </a>  515р
                </div>
                <div>
                    <a  href="/MINAKU"><img src="https://ir.ozone.ru/s3/multimedia-w/wc1000/6612147536.jpg" alt="" height="700px"><span><p>Панама MINAKU Лето  </p></span> </a> 478р
                </div>
            </form>
            <div>
                    <a  href="/DOLCE & GABBANA"><img src="https://st.tsum.com/btrx/i/12/53/45/99/01_640_square.jpg" alt="" height="700px"><span><p>Панама  DOLCE & GABBANA </p></span> </a>  2069р
                </div>
            </form>
            <div>
                    <a  href="/Off-White"><img src="https://ir.ozone.ru/s3/multimedia-r/wc1000/6670574379.jpg" alt="" height="700px"><span><p>Панама Off-White</p></span></a> 1299р
                </div>
            </form>
            <div>
                    <a  href="/Stone Island"><img src="https://sun9-79.userapi.com/impf/c630820/v630820752/19433/Y2IOYumazUs.jpg?size=520x0&quality=95&sign=89d7dbe721eb725f34fe90989f3725df" alt="" height="630px"><span><p>Панама  Stone Island</p></span> </a>  1400р
                </div>
            </form>
            <div>
                    <a  href="/Stussy"><img src="https://sun9-77.userapi.com/c637326/v637326752/62705/CMLMQdIR-Wg.jpg" alt="" height="660px"><span><p>Панама Stussy</p></span> </a>  1200р
                </div>
            </form>
        </div>
     </div>
     <style>
  body{
    background-image: url(https://pibig.info/uploads/posts/2022-07/1657199667_1-pibig-info-p-nezhno-zheltii-fon-1.jpg);
  }

</style>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>
@endsection

