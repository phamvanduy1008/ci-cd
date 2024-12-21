pipeline {

    agent any

    environment {
        DOCKERHUB_CREDENTIALS = credentials('dockerhub2') 
        IMAGE_NAME = 'phamvanduy108/built_website'
        CONTAINER_NAME = 'php_dev_app1'
    }

    stages {

        stage('Checkout Code') {
            steps {
                echo 'Lấy mã nguồn từ repository Git'
                checkout scm
            }
        }

        stage('Install Dependencies') {
            steps {
                echo 'Cài đặt dependencies bằng Composer'
                sh 'php -v'
                sh 'composer -v'
                sh 'composer install'
            }
        }

        stage('Build Docker Image') {
            steps {
                echo 'Đóng gói ứng dụng PHP vào Docker Image'
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

       stage('Deploy PHP App to DEV') {
    steps {
        echo 'Deploying PHP app to DEV environment'

        sh 'docker image pull $IMAGE_NAME'

        // Kiểm tra và dừng container đang chạy nếu tồn tại
        sh '''
        if [ "$(docker ps -q -f name=$CONTAINER_NAME)" ]; then
            docker container stop $CONTAINER_NAME;
        fi
        '''

        // Xóa container cũ nếu tồn tại
        sh '''
        if [ "$(docker ps -aq -f name=$CONTAINER_NAME)" ]; then
            docker container rm $CONTAINER_NAME;
        fi
        '''

        // Tạo Docker network nếu chưa tồn tại
        sh '''
        if [ -z "$(docker network ls --filter name=^dev$ --format '{{.Name}}')" ]; then
            docker network create dev;
        else
            echo "Network đã tồn tại";
        fi
        '''

        sh 'docker container prune -f'

        sh 'docker container run -d --rm --name $CONTAINER_NAME -p 8010:80 --network dev $IMAGE_NAME'
    }
}


    post {
        always {
            echo 'Dọn dẹp workspace sau khi hoàn tất'
            cleanWs()
        }
    }
}
