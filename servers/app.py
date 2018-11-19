from flask import Flask, request
from flask_cors import CORS
from werkzeug.utils import secure_filename
import os

UPLOAD_FOLDER = '../upload_files'

app = Flask(__name__)
app.config['UPLOAD_FOLDER'] = UPLOAD_FOLDER
CORS(app)


@app.route('/audio',methods=['POST'])
def audio():
	if request.method == 'POST':
		file = request.files['audio']
		filename = "myaudio.webm"
		filename = secure_filename(filename)
		file.save(os.path.join(app.config['UPLOAD_FOLDER'], filename))
	return "success"

@app.route('/video',methods=['POST'])
def video():
	if request.method == 'POST':
		file = request.files['video']
		filename = "myvideo.webm"
		filename = secure_filename(filename)
		file.save(os.path.join(app.config['UPLOAD_FOLDER'], filename))
	return "success"

@app.route('/audiovideo',methods=['POST'])
def audiovideo():
	if request.method == 'POST':
		file = request.files['audiovideo']
		filename = "myaudiovideo.webm"
		filename = secure_filename(filename)
		file.save(os.path.join(app.config['UPLOAD_FOLDER'], filename))
	return "success"

@app.route('/stream',methods=['POST'])
def stream():
	if request.method == 'POST':
		file = request.files['stream']
		filename = request.form['name']
		filename = secure_filename(filename)
		file.save(os.path.join(app.config['UPLOAD_FOLDER'], filename))
	return "success"



if __name__ == "__main__":
	app.run(host="0.0.0.0",debug=True)