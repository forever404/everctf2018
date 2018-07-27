FROM python:2.7

WORKDIR /usr/src/app

COPY ./requirements.txt ./
RUN pip install -i https://pypi.tuna.tsinghua.edu.cn/simple -r requirements.txt

COPY . .

EXPOSE 9999

CMD ["gunicorn", "kousuan:app", "-c", "./gunicorn_conf.py"]

