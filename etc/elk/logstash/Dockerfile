FROM docker.elastic.co/logstash/logstash:7.3.0 as beats

RUN /usr/share/logstash/bin/logstash-plugin install logstash-filter-multiline

COPY ./conf/logstash.yml /usr/share/logstash/config/logstash.yml
COPY ./pipelines/nginx_pipeline.conf /usr/share/logstash/pipeline/nginx_pipeline.conf
COPY ./conf/pipelines_beats.yml /usr/share/logstash/config/pipelines.yml