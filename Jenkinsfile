pipeline {
    agent any

    environment {
        DOCKERHUB_CREDENTIALS = credentials('dockerhub') // Thông tin đăng nhập DockerHub từ Jenkins
        IMAGE_NAME = 'duyduy/static-website'             // Tên Docker Image
    }

    stages {
        stage('Checkout Code') {
            steps {
                // Lấy mã nguồn từ repository Git
                checkout scm
            }
        }

        stage('Build Docker Image') {
            steps {
                script {
                    // Build Docker image từ Dockerfile
                    sh 'docker build -t $IMAGE_NAME .'
                }
            }
        }

        stage('Push Docker Image to DockerHub') {
            steps {
                script {
                    // Đăng nhập Docker Hub và push image
                    docker.withRegistry('https://index.docker.io/v1/', 'dockerhub') {
                        sh 'docker push $IMAGE_NAME'
                    }
                }
            }
        }

        stage('Deploy to DEV Environment') {
            steps {
                script {
                    // Dừng container cũ và chạy container mới
                    sh 'docker container stop static-website || true'
                    sh 'docker container rm static-website || true'
                    sh 'docker run -d --name static-website -p 8080:80 $IMAGE_NAME'
                }
            }
        }
    }

    post {
        always {
            // Dọn dẹp workspace
            cleanWs()
        }
    }
}
