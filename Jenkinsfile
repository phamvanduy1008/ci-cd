pipeline {
    agent any

    environment {
        DOCKERHUB_CREDENTIALS = credentials('dockerhub2') 
        IMAGE_NAME = 'phamvanduy108/website'
    }

    stages {
        stage('Checkout Code') {
            steps {
                echo 'Lấy mã nguồn từ repository Git'
                checkout scm
            }
        }

        stage('Install PHP') {
            steps {
                echo 'Cài đặt PHP'
                sh 'apt-get update'
                sh 'apt-get install -y php php-cli php-mbstring unzip'
            }
        }

        stage('Install Composer') {
            steps { 
                echo 'Cài đặt Composer' 
                sh 'php -r "copy(\'https://getcomposer.org/installer\', \'composer-setup.php\');"' 
                sh 'php composer-setup.php' 
                sh 'php -r "unlink(\'composer-setup.php\');"' 
                sh 'mv composer.phar /usr/local/bin/composer' 
            }
        }

        stage('Install PHP Dependencies') {
            steps {
                echo 'Cài đặt các thư viện phụ thuộc của PHP' 
                sh 'composer install' 
            }
        }

        stage('Run PHP Tests') {
            steps {
                echo 'Chạy các bài kiểm tra của PHP' 
                sh 'php vendor/bin/phpunit'
            }
        }

        stage('Build Docker Image') {
            steps {
                echo 'Đóng gói ứng dụng HTML/CSS vào Docker Image'
                sh 'docker build -t $IMAGE_NAME .'
            }
        }

        stage('Push Docker Image to DockerHub') {
            steps {
                echo 'Đẩy Docker Image lên DockerHub'
                withDockerRegistry(credentialsId: 'dockerhub', url: 'https://index.docker.io/v1/') {
                    sh 'docker push $IMAGE_NAME'
                }
            }
        }

        stage('Deploy to DEV Environment') {
            steps {
                echo 'Triển khai ứng dụng trên DEV'
                sh 'docker container stop html-app || echo "Container không tồn tại"'
                sh 'docker container rm html-app || echo "Không có container cần xóa"'
                sh 'docker run -d --rm --name html-app -p 8008:80 $IMAGE_NAME'
            }
        }
    }

    post {
        always {
            echo 'Dọn dẹp workspace sau khi hoàn tất'
            cleanWs()
        }
    }
}
