FROM centos
MAINTAINER xiaobao baozengkai@eisoo.com

# 设置工作目录
WORKDIR /root/

# 安装apache及php
RUN yum -y install httpd php

# 安装mysql客户端及php-mysql驱动
RUN yum -y install mysql php-mysqlnd

# 创建必要的目录
#RUN mkdir /var/log/httpd
#RUN mkdir /var/www
#RUN mkdir /var/www/html

# 设置php连接mysql的环境变量
ENV MYSQL_ADDR 172.17.0.4:3306
ENV MYSQL_USER test
ENV MYSQL_PASS 123456

ENV TERM linux
# 设置支持中文显示
ENV LC_ALL en_US.UTF-8

# 添加我们的php页面
ADD test.php /var/www/html/test.php

# 暴露80端口
EXPOSE 80

ADD run.sh /root/run.sh
RUN chmod u+x /root/run.sh
CMD /root/run.sh
