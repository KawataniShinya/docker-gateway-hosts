# docker-gateway-hosts

## background
PHPコマンドである`gethostbyaddr()`は、引数で指定するIPアドレスからホスト名を取得する。<br>
DNSなどからホスト名が解決できなければIPアドレスそのままを返却する。<br>
remiリポジトリから導入したPHP環境では、ホスト名が解決できない場合にタイムアウトまで長い待ち時間が発生する。<br>
例として、dockerホストからのリクエストはdockerネットワークのGatewayがリクエスト元となるが、コンテナ上のWebアプリケーションがリクエスト元IPアドレスから解決するホスト名を表示する場合に長時間化する。<br>
dockerベースイメージを変更せず解決する方法として、アプリケーションのhostsに docker gateway のエントリーを登録することで、簡易的に応答長時間化を回避する。

## composition
- Docker
- Nginx
- Application
  - CentOS
  - PHP-FPM
  - Laravel
- MySQL(disuse)

## install and Usage
1. コンテナ起動
```
docker-compose build
docker-compose up -d
```

2. コンテナ確認
```
docker ps
docker-compose ps
```

3. 初期設定(アプリケーション環境)
```
docker-compose exec app bash
composer install
```

4. ブラウザアクセス(即時応答する例)
```
http://localhost:8080/
```

5. ブラウザアクセス(ホスト名が解決できず応答が長時間化する例)
```
http://localhost:8080/slow
```

6. コンテナ停止
```
docker-compose down
```