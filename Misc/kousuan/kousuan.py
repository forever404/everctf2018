from flask import Flask, session, redirect, url_for, escape, request
from datetime import timedelta
import os, binascii
from hashlib import md5
from flag import flag


app = Flask(__name__)

app.secret_key = os.urandom(16)


@app.before_request
def make_session_permanent():
    session.permanent = True
    app.permanent_session_lifetime = timedelta(seconds=8)


@app.route('/', methods=['GET', 'POST'])
def index():    
    if request.method == 'POST':
        if 'a' not in session or 'b' not in session:
            return 'You are so slow...'
        try:
            a = int(escape(session['a']))
            b = int(escape(session['b']))
            c = request.form['c']

            if md5(str(a + b)).hexdigest() != c:
                return 'You are wrong...laji'
        except:
            return 'You are wrong...laji'
        return 'Very Good! <br><br>{0}'.format(flag)

    a = str(int(binascii.hexlify(os.urandom(4)), 16))
    b = str(int(binascii.hexlify(os.urandom(4)), 16))
    session['a'] = a
    session['b'] = b
    return '''
        {0} + {1} = c<br><br>
        md5(c) = ?
        <form method="post">
            <p><input type=text name=c>
            <p><input type=submit value=submit>
        </form>
    '''.format(a, b)

