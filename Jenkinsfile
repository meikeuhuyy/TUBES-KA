pipeline {
    agent any  // Menentukan agen untuk menjalankan pipeline
    environment {
        DOCKER_IMAGE = "minfulmedia"  // Nama image Docker yang akan dibangun
        DOCKER_REGISTRY = 'docker.io' // Registry Docker
        DOCKER_REPO = 'azzahra177/minfulmedia' // Nama repository Docker
        DOCKER_CREDENTIALS = 'azzahra177' // ID kredensial di Jenkins untuk login ke Docker registry
    }

    stages {
        stage('Git Checkout') {
            steps {
                // Melakukan checkout dari repository Git
                git branch: 'main', changelog: false, poll: false, url: 'https://github.com/AzzahraRST/TubesKA'
            }
        }

        stage('Build Docker Image') {
            steps {
                script {
                    // Membuat Docker image dengan nama yang didefinisikan di variabel DOCKER_IMAGE
                    docker.build("${DOCKER_IMAGE}", ".")
                }
            }
        }

        stage('Push Docker Image') {
            steps {
                script {
                    // Login ke Docker registry dan push image ke repository
                   docker.withRegistry('', 'azzahra177') {
                        docker.image("${DOCKER_REPO}:latest").push()
                    }

                }
            }
        }

        // stage('Deploy to Ansible Server') {
        //     steps {
        //         script {
        //             sshPublisher(
        //                 publishers: [
        //                     sshPublisherDesc(
        //                         configName: 'Ansible-Server', // Ganti dengan nama konfigurasi server SSH Anda di Jenkins
        //                         transfers: [
        //                             sshTransfer(
        //                                 sourceFiles: '/*', // Semua file di workspace akan dikirim
        //                                 remoteDirectory: '/var/www/atoz_app/' // Folder tujuan di server
        //                             )
        //                         ],
        //                         usePromotionTimestamp: false,
        //                         verbose: true
        //                     )
        //                 ]
        //             )
        //         }
        //     }
        // }
        
        // stage('Deploy to Kubernetes Server') {
        //     steps {
        //         script {
        //             sshPublisher(
        //                 publishers: [
        //                     sshPublisherDesc(
        //                         configName: 'Kubernetes-Server', // Ganti dengan nama konfigurasi server SSH Anda di Jenkins
        //                         transfers: [
        //                             sshTransfer(
        //                                 sourceFiles: '/*', // Semua file di workspace akan dikirim
        //                                 remoteDirectory: '/var/www/atoz_app/' // Folder tujuan di server
        //                             )
        //                         ],
        //                         usePromotionTimestamp: false,
        //                         verbose: true
        //                     )
        //                 ]
        //             )
        //         }
        //     }
        // }
        
    }
}
